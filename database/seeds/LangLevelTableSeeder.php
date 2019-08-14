<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangLevelTableSeeder extends Seeder
{
    public function run()
    {
        // truncate data
        DB::table('lang_level')->truncate();

        //
        $ss = [
            'A1 — Начальный',
            'A2 — Элементарный',
            'B1 — Средний',
            'B2 — Средне-продвинутый',
            'C1 — Продвинутый',
            'C2 — В совершенстве',
        ];

        $this->command->getOutput()->progressStart(count($ss));
        foreach($ss as $value) {
            DB::table('lang_level')->insert([
                'title' => $value,
                'title_en' => $value,
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}