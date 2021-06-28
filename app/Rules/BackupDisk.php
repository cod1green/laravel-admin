<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BackupDisk implements Rule
{
    public function passes($attribute, $value)
    {
        return in_array($value, config('backup.backup.destination.disks'));
    }

    public function message()
    {
        return 'Current disk is not configured as a backup disk';
    }
}
