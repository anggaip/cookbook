<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'name' => 'Angga Indriya',
            'email' => 'anggaindriya@gmail.com',
            'password' => Hash::make('password')
        ];

        User::create($user);
    }
}
