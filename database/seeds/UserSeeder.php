<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Test Spiller', 'email' => 'test@test.com', 'password' => Hash::make('password')],
        ];


        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
