<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            LangLevelTableSeeder::class,
            SferadeyatelTableSeeder::class,
            RegionsTableSeeder::class,
            CitiesTableSeeder::class,
            VacanciesTableSeeder::class,
            CompaniesTableSeeder::class,
            PackagesTableSeeder::class,
            EmployeesTableSeeder::class,

            //PostsTableSeeder::class,
            //CommentsTableSeeder::class,
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
