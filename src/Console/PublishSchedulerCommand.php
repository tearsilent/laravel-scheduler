<?php

namespace tearsilent\LaravelScheduler\Console;

use Illuminate\Console\Command;

class PublishSchedulerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scheduler:publish {--force : Overwrite any existing files}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the scheduler resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--provider' => 'tearsilent\LaravelScheduler\LaravelSchedulerServiceProvider',
            '--force' => true,
        ]);
        
    }
}
