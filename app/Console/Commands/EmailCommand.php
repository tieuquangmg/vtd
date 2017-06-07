<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Bus;

class EmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';
	protected $name = 'email:everyHour';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	    Bus::dispatchFromArray('App\Commands\EmailCommand', []);
    }
}
