<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('choice');
            $table->string('ip');
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
            $table->integer('created_at'); // unix timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
