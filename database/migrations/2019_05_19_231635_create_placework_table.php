<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placework', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->integer('user_id');

            // title company
            $table->string('title_company', 255);
            // from table - cities
            $table->integer('city_id');
            // from table - sfera deyatelnosti
            $table->integer('sd_id');
            // dolgnost
            $table->string('post', 255);
            $table->integer('m_from');
            $table->integer('y_from');
            $table->integer('m_to');
            $table->integer('y_to');
            $table->integer('is_curtime'); // current time

            $table->text('description')->nullable();
            $table->string('site',255)->nullable();

            $table->integer('is_delete')->default(0);
            $table->integer('created_at')->nullable();
            $table->integer('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placework');
    }
}
