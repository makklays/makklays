<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            // from table - companies
            $table->integer('company_id');
            $table->integer('user_id');
            $table->string('title', 255);
            $table->text('description');
            // from table - cities
            $table->integer('city_id')->default(NULL);
            // experience:
            // 1 - нет опыта
            // 2 - от 1 до 3
            // 3 - от 3 до 6
            // 4 - больше 6
            $table->integer('experience')->default(1);

            // type_emp - type of employment:
            // 1 - Full time
            // 2 - Part time
            // 3 - Internship / Practice
            // 4 - Remote work
            // 5 - Project work
            $table->integer('type_emp')->default(1);
            $table->integer('salary')->default(NULL);
            $table->integer('show_salary')->default(1);
            $table->string('currency',3)->default('USD');
            $table->integer('is_hot')->default(0);

            // число просмотров
            $table->integer('viewes')->default(0);

            $table->integer('is_visible')->default(1);
            $table->integer('is_delete')->default(0);
            $table->integer('created_at')->nullable();
            $table->integer('modified_at')->nullable();

            $table->integer('public_date')->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
