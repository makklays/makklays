<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'phpdevops@gmail.com',
            'email' => 'phpdevops@gmail.com',
            'password' => '$2y$10$5Q.JU4fRZni5.mVWgL4z4uI8fjS4Sjklbg80Iwb8NLdWCIX0kN0vq',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        /*DB::table('users')->insert([
            'name' => 'phpdevops@gmail.com',
            'email' => 'phpdevops@gmail.com',
            'password' => Hash::make('password'),
        ]);*/
    }
}