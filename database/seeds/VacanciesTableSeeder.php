<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanciesTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('vacancies')->truncate();

        $this->command->getOutput()->progressStart(11);
        // 1
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Developer PHP',
            'description' => 'Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. Need know bla-bla-blaa. ',
            'city_id' => 1,
            'experience' => 2,
            'type_emp' => 1,
            'salary' => 2000,
            'show_salary' => 1,
            'is_hot' => 1,
            'viewes' => 100,
            'created_at' => '1558012345',
            'modified_at' => '1558012345',
            'public_date' => '1558014345',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 2
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'PHP Programmer',
            'description' => 'Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. Need know PHP and bla-bla-blaa. ',
            'city_id' => 5,
            'experience' => 4,
            'type_emp' => 1,
            'salary' => 5000,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 200,
            'created_at' => '1558022345',
            'modified_at' => '1558022345',
            'public_date' => '1558024345',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 3
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Translater',
            'description' => 'Need know languages. Need know languages. Need know languages. Need know languages. Need know languages. Need know languages. Need know languages. Need know languages. ',
            'city_id' => 3,
            'experience' => 3,
            'type_emp' => 2,
            'salary' => 3000,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 400,
            'created_at' => '1558022245',
            'modified_at' => '1558022245',
            'public_date' => '1558022245',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 4
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Translater english',
            'description' => 'Need know en languages. Need know en languages. Need know en languages. Need know en languages. Need know en languages. Need know en languages. Need know en languages. ',
            'city_id' => 2,
            'experience' => 3,
            'type_emp' => 2,
            'salary' => 2200,
            'show_salary' => 1,
            'is_hot' => 1,
            'viewes' => 500,
            'created_at' => '1558022235',
            'modified_at' => '1558022235',
            'public_date' => '1558022235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 5
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'SQL database',
            'description' => 'Need know SQL database. Need know SQL database. Need know SQL database. Need know SQL database. Need know SQL database. Need know SQL database. Need know SQL database. ',
            'city_id' => 6,
            'experience' => 2,
            'type_emp' => 5,
            'salary' => 2800,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 600,
            'created_at' => '1558022235',
            'modified_at' => '1558022235',
            'public_date' => '1558022235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 6
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Go lang',
            'description' => 'Decsription description go lang. Decsription description go lang. Decsription description go lang. Decsription description go lang. Decsription description go lang. ',
            'city_id' => 2,
            'experience' => 2,
            'type_emp' => 5,
            'salary' => 2800,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 700,
            'created_at' => '1558022235',
            'modified_at' => '1558022235',
            'public_date' => '1558022235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 7
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'JScript',
            'description' => 'Decsription description JScript. Decsription description JScript. Decsription description JScript. Decsription description JScript. Decsription description JScript. Decsription description JScript. Decsription description JScript. ',
            'city_id' => 1,
            'experience' => 3,
            'type_emp' => 1,
            'salary' => 1800,
            'show_salary' => 0,
            'is_hot' => 0,
            'viewes' => 800,
            'created_at' => '1558012235',
            'modified_at' => '1558012235',
            'public_date' => '1558012235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 8
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Java Script',
            'description' => 'Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. Decsription description Java Script. ',
            'city_id' => 5,
            'experience' => 4,
            'type_emp' => 2,
            'salary' => 1900,
            'show_salary' => 0,
            'is_hot' => 0,
            'viewes' => 900,
            'created_at' => '1558012235',
            'modified_at' => '1558012235',
            'public_date' => '1558012235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 9
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Cooker',
            'description' => 'Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. ',
            'city_id' => 7,
            'experience' => 4,
            'type_emp' => 2,
            'salary' => 2100,
            'show_salary' => 1,
            'is_hot' => 1,
            'viewes' => 1000,
            'created_at' => '1558012235',
            'modified_at' => '1558012235',
            'public_date' => '1558012235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 10
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Shef Cooker',
            'description' => 'Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. Description description Cooker. ',
            'city_id' => 8,
            'experience' => 1,
            'type_emp' => 1,
            'salary' => 1900,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 1100,
            'created_at' => '1558112235',
            'modified_at' => '1558112235',
            'public_date' => '1558112235',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 11
        DB::table('vacancies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'title' => 'Doctor',
            'description' => 'Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. Description description Doctor. ',
            'city_id' => 9,
            'experience' => 1,
            'type_emp' => 1,
            'salary' => 2300,
            'show_salary' => 1,
            'is_hot' => 0,
            'viewes' => 1300,
            'created_at' => '1558102235',
            'modified_at' => '1558102235',
            'public_date' => '1558102235',
        ]);
        $this->command->getOutput()->progressAdvance();

        $this->command->getOutput()->progressFinish();
    }
}