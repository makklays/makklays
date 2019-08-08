<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->integer('user_id');

            // from table - education_type (lang)
            // 1 - высшее
            // 2 - неоконченное высшее
            // 3 - средне-специальное
            // 4 - среднее
            $table->integer('educ_type_id')->nullable();
            $table->string('title_place', 255)->nullable();
            $table->string('faculty', 255)->nullable();
            $table->string('special', 255)->nullable();

            $table->integer('year_end');
            $table->integer('is_educ')->default(0);

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
        Schema::dropIfExists('educations');
    }
}
