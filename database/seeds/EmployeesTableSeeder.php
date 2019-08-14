<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('employees')->truncate();

        $this->command->getOutput()->progressStart(1);

        // 1
        DB::table('employees')->insert([
            //'id' => 1,
            'firstname' => 'Alexander',
            'lastname' => 'Kuziv',
            'company_id' => 1,
            'phone' => '+38 098 8705397',
            'email' => 'phpdevops@gmail.com',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        $this->command->getOutput()->progressAdvance();

        $this->command->getOutput()->progressFinish();
    }
}