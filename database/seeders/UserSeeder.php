<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'admin@example.com')->first();
        if (!$admin) {
            $admin = new User();
            $admin->name = 'Administrator N.';
            $admin->role = 'ADMIN';
            $admin->email = 'admin@example.com';
            $admin->password = Hash::make('adminpass');
            $admin->save();
        }

        $user = User::where('email', 'user01@example.com')->first();
        if (!$user) {
            $user = new User();
            $user->name = 'User 01';
            $user->role = 'USER';
            $user->email = 'user01@example.com';
            $user->password = Hash::make('userpass');
            $user->save();
    }
}
