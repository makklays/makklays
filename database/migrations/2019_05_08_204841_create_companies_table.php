<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->integer('is_checked')->default(0);
            $table->string('website', 255)->nullable();
            $table->timestamps();
        });

        // 1
        DB::table('companies')->insert([
            'name' => 'Makklays Ltd.',
            'email' => 'makklays@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'http://makklays.com.ua',
        ]);

        // 2
        DB::table('companies')->insert([
            'name' => 'CocaCola & Co',
            'email' => 'cocacola@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'http://cocacola.com',
        ]);

        // 3
        DB::table('companies')->insert([
            'name' => 'Microsoft',
            'email' => 'microsoft@gmail.com',
            'logo' => '',
            'is_checked' => 1,
            'website' => 'https://microsoft.com',
        ]);

        // 4
        DB::table('companies')->insert([
            'name' => 'Рога и копыта',
            'email' => 'roga@gmail.com',
            'logo' => '',
            'website' => 'http://roga.com',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
