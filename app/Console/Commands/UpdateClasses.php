<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateClasses extends Command
{
    protected $signature = 'update:classes';
    protected $description = 'Append :dark to all classes in Blade files';

    public function handle()
    {
        $filePath = resource_path('views/modules/hrm/employee/employees.blade.php');
        $fileContents = file_get_contents($filePath);
        $updatedContents = preg_replace('/class="([^"]+)"/', 'class="$1 dark:bg-neutral-800"', $fileContents);
        file_put_contents($filePath, $updatedContents);

        $this->info('Classes updated successfully!');
    }
}
