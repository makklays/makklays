<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYourpartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yourparts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cv_id');
            $table->integer('user_id');

            // from table - yourpart_type
            // Тип раздела
            // 1 - Компьютерные навыки
            // 2 - Общественная деятельность
            // 3 - Водительское удостоверение
            // 4 - Военная служба
            // 5 - Стажировка
            // 6 - Личные качества
            // 7 - Научная деятельность
            // 8 - Увлечения и интересы
            // 9 - Свой раздел
            $table->integer('yp_type_id');
            $table->string('title', 255);
            $table->text('description')->nullable();

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
        Schema::dropIfExists('yourparts');
    }
}
