<?php

namespace RaditzFarhan\LumenCommandGenerator\Commands;

use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Filesystem\Filesystem as SymfonyFilesystem;

class StorageLinkCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'storage:link {--relative : Create the symbolic link using relative paths}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the symbolic links configured for the application and create target folder if not exists.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $files = $this->laravel->make('files');

        foreach ($this->links() as $link => $target) {
            if (file_exists($link)) {
                $this->error("The [$link] link already exists.");
            } else {
                if (!file_exists($target)) {
                    $files->makeDirectory($target);
                }

                if ($this->option('relative')) {
                    $target = $this->getRelativeTarget($link, $target);
                }

                $files->link($target, $link);


                $this->info("The [$link] link has been connected to [$target].");
            }
        }

        $this->info('The links have been created.');
    }

    /**
     * Get the symbolic links that are configured for the application.
     *
     * @return array
     */
    protected function links()
    {
        return $this->laravel['config']['filesystems.links'] ??
            [app()->basePath('public/storage') => app()->storagePath('app/public')];
    }

    /**
     * Get the relative path to the target.
     *
     * @param  string  $link
     * @param  string  $target
     * @return string
     */
    protected function getRelativeTarget($link, $target)
    {
        if (!class_exists(SymfonyFilesystem::class)) {
            throw new Exception('Please install the symfony/filesystem Composer package to create relative links.');
        }

        return (new SymfonyFilesystem)->makePathRelative($target, dirname($link));
    }
}
