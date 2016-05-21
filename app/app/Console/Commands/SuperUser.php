<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

use App\User;
use UserSuite\Role;

class SuperUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:superuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an super user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = new User();
        
        
    }
}
