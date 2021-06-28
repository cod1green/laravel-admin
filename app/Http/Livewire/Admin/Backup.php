<?php

namespace App\Http\Livewire\Admin;

use App\Jobs\CreateBackupJob;
use App\Rules\BackupDisk;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Spatie\Backup\BackupDestination\Backup as SpatieBackup;
use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\Helpers\Format;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatus;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatusFactory;

class Backup extends Component
{
    public $backupStatuses = [];

    public $activeDisk = null;

    public $disks = [];

    public $files = [];

    public $deletingFile = null;

    public function render()
    {
        abort_if(Gate::denies('backup'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.backup');
    }

    public function updateBackupStatuses()
    {
        $this->backupStatuses = Cache::remember(
            'backup-statuses',
            now()->addSeconds(4),
            function () {
                return BackupDestinationStatusFactory::createForMonitorConfig(config('backup.monitor_backups'))
                    ->map(
                        function (BackupDestinationStatus $backup) {
                            return [
                                'name' => $backup->backupDestination()->backupName(),
                                'disk' => $backup->backupDestination()->diskName(),
                                'reachable' => $backup->backupDestination()->isReachable(),
                                'healthy' => $backup->isHealthy(),
                                'amount' => $backup->backupDestination()->backups()->count(),
                                'newest' => $backup->backupDestination()->newestBackup()
                                    ? $backup->backupDestination()->newestBackup()->date()->diffForHumans()
                                    : trans('project.backup.no_backup_present'),
                                'usedStorage' => Format::humanReadableSize($backup->backupDestination()->usedStorage()),
                            ];
                        }
                    )
                    ->values()
                    ->toArray();
            }
        );

        if (!$this->activeDisk and count($this->backupStatuses)) {
            $this->activeDisk = $this->backupStatuses[0]['disk'];
        }

        $this->disks = collect($this->backupStatuses)
            ->map(
                function ($backupStatus) {
                    return $backupStatus['disk'];
                }
            )
            ->values()
            ->all();

        $this->emitSelf('backupStatusesUpdated');
    }

    public function getFiles(string $disk = '')
    {
        if ($disk) {
            $this->activeDisk = $disk;
        }

        $this->validateActiveDisk();

        $backupDestination = BackupDestination::create($this->activeDisk, config('backup.backup.name'));

        $this->files = Cache::remember(
            "backups-{$this->activeDisk}",
            now()->addSeconds(4),
            function () use ($backupDestination) {
                return $backupDestination
                    ->backups()
                    ->map(
                        function (SpatieBackup $backup) {
                            $size = method_exists($backup, 'sizeInBytes') ? $backup->sizeInBytes() : $backup->size();

                            return [
                                'path' => $backup->path(),
                                'date' => $backup->date()->format('d/m/Y H:i:s'),
                                'size' => Format::humanReadableSize($size),
                            ];
                        }
                    )
                    ->toArray();
            }
        );
    }

    public function showDeleteModal($fileIndex)
    {
        $this->deletingFile = $this->files[$fileIndex];

        $this->emitSelf('showDeleteModal');
    }

    public function delete()
    {
        $deletingFile = $this->deletingFile;
        $this->deletingFile = null;

        $this->emitSelf('hideDeleteModal');

        $this->validateActiveDisk();

        $backupDestination = BackupDestination::create($this->activeDisk, config('backup.backup.name'));

        $backupDestination
            ->backups()
            ->first(
                function (SpatieBackup $backup) use ($deletingFile) {
                    return $backup->path() === $deletingFile['path'];
                }
            )
            ->delete();

        $this->updateBackupStatuses();

        $this->files = collect($this->files)
            ->reject(
                function ($file) use ($deletingFile) {
                    return $file['path'] === $deletingFile['path']
                        && $file['date'] === $deletingFile['date']
                        && $file['size'] === $deletingFile['size'];
                }
            )
            ->values()
            ->all();
    }

    public function createBackup(string $option = '')
    {
        dispatch(new CreateBackupJob($option))->onQueue(config('laravel_backup_panel.queue'));
    }

    protected function validateActiveDisk()
    {
        try {
            Validator::make(
                ['activeDisk' => $this->activeDisk],
                [
                    'activeDisk' => ['required', new BackupDisk()],
                ],
                [
                    'activeDisk.required' => 'Select a disk',
                ]
            )->validate();
        } catch (ValidationException $e) {
            $message = $e->validator->errors()->get('activeDisk')[0];
            $this->emitSelf('showErrorToast', $message);

            throw $e;
        }
    }
}
