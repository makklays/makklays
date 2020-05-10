<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('lang')->nullable();
            $table->string('strana')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('strana_rus')->nullable();
            $table->string('city_rus')->nullable();
            $table->string('region_rus')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('strana_code')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
