<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Exceptions\PasswordMismatchException;

use App\User;
use App\Role;

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
     * @throws PasswordMismatchException
     * @return mixed
     */
    public function handle()
    {
        $user = new User();
        
        $name = $this->ask("Name");
        $user->name = $name;

        $email = $this->ask("Email Address");
        $user->email = $email;

        $password = $this->secret("Password");
        $password_again = $this->secret("Password (again)");

        if ($password !== $password_again) {
            throw new PasswordMismatchException("Passwords don't match.");
        }

        $user->password = $password;

        $user->save();
        $user->assignRole('admin', true);

        $this->info("Admin user " . $user->name . " has been created!");
    }
}
