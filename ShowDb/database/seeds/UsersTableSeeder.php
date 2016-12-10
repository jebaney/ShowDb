<?php

use Illuminate\Database\Seeder;
use ShowDb\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Define the users you want to add
        $users = [
            ['poehler@interworx.com','Paul Oehler','booboo123','iworx-paul',1],
            ['jill@harvard.edu','jill','helloworld','jill',0],    # <-- Required for P4
            ['jamal@harvard.edu','jamal','helloworld','jamal',0], # <-- Required for P4
        ];

        # Get existing users to prevent duplicates
        $existingUsers = User::all()->keyBy('email')->toArray();
        foreach($users as $user) {
            # If the user does not already exist, add them
            if(!array_key_exists($user[0],$existingUsers)) {
                $user = User::create([
                    'email' => $user[0],
                    'name' => $user[1],
                    'password' => Hash::make($user[2]),
                    'username' => $user[3],
                    'avatar' => '',
                    'admin' => $user[4],
                ]);
            }
        }
    }
}
