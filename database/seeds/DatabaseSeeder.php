<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'phpdevops@gmail.com',
            'email' => 'phpdevops@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
