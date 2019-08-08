<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateLangLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_level', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->string('title_en');

            //$table->timestamps();
        });

        $ss = [
            'A1 — Начальный',
            'A2 — Элементарный',
            'B1 — Средний',
            'B2 — Средне-продвинутый',
            'C1 — Продвинутый',
            'C2 — В совершенстве',
        ];

        foreach($ss as $value) {
            DB::table('lang_level')->insert([
                'title' => $value,
                'title_en' => $value,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lang_level');
    }
}
