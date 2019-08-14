<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('packages')->truncate();

        $this->command->getOutput()->progressStart(3);

        // 1
        DB::table('packages')->insert([
            //'id' => 1,
            'title' => 'Пакет АТБ',
            'short_description' => 'Описание - Пакет АТБ',
            'full_description' => 'Описание полное - Пакет АТБ',
            'days' => 11,
            'price' => 20.50,
            'currency' => 'USD',
            'is_visible' => 1,
            'is_delete' => 1,
            'created_at' => time(),
            //'modified_at' => '1558012345',
            //'public_date' => '1558014345',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 2
        DB::table('packages')->insert([
            //'id' => 1,
            'title' => 'Пакет Молока',
            'short_description' => 'Описание - Пакет Молока',
            'full_description' => 'Описание полное - Пакет Молока',
            'days' => 11,
            'price' => 20.50,
            'currency' => 'USD',
            'is_visible' => 1,
            'is_delete' => 0,
            'created_at' => time(),
            //'modified_at' => '1558012345',
            //'public_date' => '1558014345',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 3
        DB::table('packages')->insert([
            //'id' => 2,
            'title' => 'Пакет ФОРА',
            'short_description' => 'Описание - Пакет ФОРА',
            'full_description' => 'Описание полное - Пакет ФОРА',
            'days' => 30,
            'price' => 2.50,
            'currency' => 'EUR',
            'is_visible' => 1,
            'is_delete' => 0,
            'created_at' => time(),
            //'modified_at' => '1558012345',
            //'public_date' => '1558014345',
        ]);
        $this->command->getOutput()->progressAdvance();

        // 4
        DB::table('packages')->insert([
            //'id' => 3,
            'title' => 'Пакет Standart',
            'short_description' => 'Описание - Пакет Standart',
            'full_description' => 'Описание полное - Пакет Standart',
            'days' => 180,
            'price' => 40.00,
            'currency' => 'EUR',
            'is_visible' => 1,
            'is_delete' => 0,
            'created_at' => time(),
            //'modified_at' => '1558012345',
            //'public_date' => '1558014345',
        ]);
        $this->command->getOutput()->progressAdvance();

        $this->command->getOutput()->progressFinish();
    }
}