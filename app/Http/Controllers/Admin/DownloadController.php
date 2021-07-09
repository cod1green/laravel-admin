<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadController extends Controller
{
    public function __invoke(string $disk, string $file): StreamedResponse
    {
        $contents = collect(Storage::disk($disk)->listContents('/', false));

        $content = $contents
            ->where('type', '=', 'file')
            ->where('basename', '=', $file)
            ->first();

        return response()->streamDownload(
            function () use ($disk, $file) {
                $stream = Storage::disk($disk)->readStream($file);
                fpassthru($stream);

                if (is_resource($stream)) {
                    fclose($stream);
                }
            },
            "{$content['filename']}.{$content['extension']}",
            ['Content-Type' => $content['mimetype'] ?? 'application/x-zip']
        );
    }
}
