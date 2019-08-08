<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSferadeyatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sferadeyatel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('is_visible')->default(1);
            $table->integer('sort')->default(10);
        });

        $ss = [
            'FMCG',
            'HR',
            'IT - разработка ПО',
            'IT-консалтинг / Услуги / Производство оборудования',
            'Автомобильная промышленность и Автобизнес',
            'АПК (Агропромышленный комплекс)',
            'Архитектурные и дизайнерские бюро',
            'Банки',
            'Государственный сектор',
            'Другое',
            'Издательства и Полиграфия',
            'Интернет',
            'Консалтинг / Аудит',
            'Красота / Фитнес / Спорт',
            'Медиа / СМИ',
            'Медицина и Здравоохранение',
            'Негосударственные организации / NGO',
            'Недвижимость и Девелопмент',
            'Образование',
            'Отели / Рестораны / Развлекательные комплексы',
            'Охрана и Безопасность',
            'Промышленность и Производство',
            'Реклама / Маркетинг / PR-услуги',
            'Страхование',
            'Строительство',
            'Телекоммуникации / Связь',
            'Торговля оптовая / Дистрибуция / Импорт-экспорт',
            'Торговля розничная / Retail',
            'Транспорт и Логистика',
            'Туризм / Путешествия / Пассажирские перевозки',
            'Услуги для бизнеса - другое',
            'Услуги для населения - другое',
            'Фармацевтика',
            'Финансовые услуги',
            'Шоу-бизнес',
            'Электроника и электротехника',
            'Энергетика и Энергоносители',
            'Юридические услуги'
        ];

        foreach($ss as $value) {
            DB::table('sferadeyatel')->insert([
                'title' => $value,
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
        Schema::dropIfExists('sferadeyatel');
    }
}
