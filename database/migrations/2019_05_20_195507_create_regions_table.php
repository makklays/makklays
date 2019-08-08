<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
            $table->integer('is_visible')->default(1);
            $table->integer('sort')->default(10);
        });

        $regions_ua = [
            'Винницкая область', 'Волынская область', 'Днепропетровская область',
            'Донецкая область', 'Житомирская область', 'Закарпатская область', 'Запорожская область',
            'Ивано-Франковская область', 'Киевская область', 'Кировоградская область', 'Луганская область',
            'Львовская область', 'Николаевская область', 'Одесская область', 'Полтавская область',
            'Ровненская область', 'Сумская область', 'Тернопольская область', 'Харьковская область',
            'Херсонская область', 'Хмельницкая область', 'Черкасская область', 'Черниговская область',
            'Черновицкая область', 'АР Крым'
        ];
        foreach ($regions_ua as $name) {
            DB::table('regions')->insert([
                'name' => $name,
                'country_id' => 1,
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
        Schema::dropIfExists('regions');
    }
}
