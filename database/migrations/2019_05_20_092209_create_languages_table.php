<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->integer('user_id');

            // from table - language (lang)
            $table->integer('lang_id')->nullable();
            // from table - level (lang)
            $table->integer('level_id')->nullable();
            $table->string('cert'); // certification
            $table->integer('is_interview')->default(0);

            $table->integer('is_delete')->default(0);
            $table->integer('created_at')->nullable();
            $table->integer('modified_at')->nullable();
        });

        /*$ss = [
            'Английский', 'Немецкий', 'Французский', 'Абазинский', 'Абхазский', 'Аварский', 'Азербайджанский',
            'Албанский', 'Амхарский', 'Арабский', 'Армянский', 'Африкаанс', 'Баскский', 'Башкирский', 'Белорусский',
            'Бенгальский', 'Бирманский', 'Болгарский', 'Боснийский', 'Бурятский', 'Венгерский', 'Вьетнамский',
            'Голландский', 'Греческий', 'Грузинский', 'Дагестанский', 'Даргинский', 'Датский', 'Иврит',
            'Ингушский', 'Индонезийский', 'Ирландский', 'Исландский', 'Испанский', 'Итальянский',
            'Кабардино-черкесский', 'Казахский', 'Карачаево-балкарский', 'Карельский', 'Каталанский', 'Кашмирский',
            'Китайский', 'Коми', 'Корейский', 'Креольский (Сейшельские острова)', 'Кумыкский',
            'Курдский', 'Кхмерский (Камбоджийский)', 'Кыргызский', 'Лакский', 'Лаосский', 'Латинский',
            'Латышский', 'Лезгинский', 'Литовский', 'Македонский', 'Малазийский', 'Мансийский', 'Марийский',
            'Монгольский', 'Непальский', 'Ногайский', 'Норвежский', 'Осетинский', 'Панджаби', 'Персидский',
            'Польский', 'Португальский', 'Пушту', 'Румынский',
            'Русский','Санскрит','Сербский','Словацкий','Словенский','Сомалийский','Суахили','Тагальский',
            'Таджикский','Тайский','Талышский','Тамильский','Татарский','Тибетский','Тувинский',
            'Турецкий','Туркменский','Удмуртский','Узбекский','Уйгурский','Украинский','Урду',
            'Финский','Фламандский','Хинди','Хорватский','Чеченский','Чешский','Чувашский','Шведский','Эсперанто',
            'Эстонский','Якутский','Японский',
        ];

        foreach($ss as $value) {
            DB::table('languages')->insert([
                'title' => $value,
            ]);
        }*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}