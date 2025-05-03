<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SomeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'some:command';  // Change the command name here

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a custom command for your application';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('The some:command was executed successfully!');
        
        return Command::SUCCESS;
    }
}
