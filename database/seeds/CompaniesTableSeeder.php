<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // truncate data
        //Schema::drop('employees_company_id_foreign');
        //DB::table('employees')->dropForeign(['employees_company_id_foreign']);
        DB::table('companies')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->getOutput()->progressStart(4);

        // 1
        DB::table('companies')->insert([
            'name' => 'Makklays Ltd.',
            'email' => 'makklays@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'http://makklays.com.ua',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->command->getOutput()->progressAdvance();

        // 2
        DB::table('companies')->insert([
            'name' => 'CocaCola & Co',
            'email' => 'cocacola@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'http://cocacola.com',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->command->getOutput()->progressAdvance();

        // 3
        DB::table('companies')->insert([
            'name' => 'Microsoft',
            'email' => 'microsoft@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'https://microsoft.com',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->command->getOutput()->progressAdvance();

        // 4
        DB::table('companies')->insert([
            'name' => 'Рога и копыта',
            'email' => 'roga@gmail.com',
            'logo' => '',
            'website' => 'http://roga.com',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->command->getOutput()->progressAdvance();

        $this->command->getOutput()->progressFinish();
    }
}