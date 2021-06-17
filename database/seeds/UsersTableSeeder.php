<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'mark.88g@outlook.com',
                'password' => 'nuova+password%DB2021legambiente'
            ]
        ];

        foreach ($users as $user)
        {
            // new istance
            $newUser = new User();

            // assign value
            $newUser -> name = $user['name'];
            $newUser -> email = $user['email'];
            $newUser -> password = Hash::make($user['password']);

            $newUser -> save();
        }
    }
}