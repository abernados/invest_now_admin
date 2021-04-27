<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Admin User';

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
     * @return int
     */
    public function handle()
    {
        $this->getUserInfo();


        if($this->validateUserInfo()) {
            $user = User::updateOrCreate(
                [
                    'email' => $this->email
                ],
                [
                    'name' => $this->name,
                    'password' => bcrypt($this->password)
                ]
            );

            if ($user) $this->info('User has been created.');
        }
    }

    protected function getUserInfo()
    {
        $this->name = $this->ask('Name');
        $this->email = $this->ask('Email');
        $this->password = $this->ask('Password');
        $this->password_confirmation = $this->ask('Confirm Password');
    }

    protected function validateUserInfo()
    {
        $validator = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ], [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            $this->error('The given data was invalid.');

            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return false;
        }

        return true;
    }
}
