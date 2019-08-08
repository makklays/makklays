<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title', 255);
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('site',255)->nullable();
            $table->integer('typejob')->nullable();
            $table->integer('salary')->nullable();
            $table->string('currency',3)->default('USD');
            $table->text('about')->nullable();

            // имеете автомобиль
            $table->integer('has_car')->default(0);
            // имеете права категории
            $table->integer('has_a')->default(0);
            $table->integer('has_b')->default(0);
            $table->integer('has_c')->default(0);
            $table->integer('has_d')->default(0);
            $table->integer('has_e')->default(0);
            $table->integer('has_be')->default(0);
            $table->integer('has_ce')->default(0);
            $table->integer('has_de')->default(0);
            $table->integer('has_tm')->default(0);
            $table->integer('has_tb')->default(0);

            // число просмотров
            $table->integer('viewes')->default(0);

            $table->integer('is_visible')->default(1);
            $table->integer('is_delete')->default(0);
            $table->integer('created_at')->nullable();
            $table->integer('modified_at')->nullable(); // ->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
