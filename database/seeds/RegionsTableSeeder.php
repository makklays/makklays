<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('regions')->truncate();

        $regions_ua = [
            'Винницкая область', 'Волынская область', 'Днепропетровская область',
            'Донецкая область', 'Житомирская область', 'Закарпатская область', 'Запорожская область',
            'Ивано-Франковская область', 'Киевская область', 'Кировоградская область', 'Луганская область',
            'Львовская область', 'Николаевская область', 'Одесская область', 'Полтавская область',
            'Ровненская область', 'Сумская область', 'Тернопольская область', 'Харьковская область',
            'Херсонская область', 'Хмельницкая область', 'Черкасская область', 'Черниговская область',
            'Черновицкая область', 'АР Крым'
        ];

        $this->command->getOutput()->progressStart(count($regions_ua));

        foreach ($regions_ua as $name) {
            DB::table('regions')->insert([
                'name' => $name,
                'country_id' => 1,
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}