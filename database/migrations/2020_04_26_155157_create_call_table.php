<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fio', '255')->nullable();
            $table->string('phone', '255'); //->default('NOT NULL');
            $table->string('messenger', '255')->nullable();
            $table->string('want_development', '255')->nullable();
            $table->string('ip_address', '255')->nullable();
            $table->string('lang', '5')->nullable();
            $table->integer('created_at')->default(time());
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call');
    }
}
