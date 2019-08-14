<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        /*DB::table('users')->insert([
            'name' => 'phpdevops@gmail.com',
            'email' => 'phpdevops@gmail.com',
            'password' => '$2y$10$5Q.JU4fRZni5.mVWgL4z4uI8fjS4Sjklbg80Iwb8NLdWCIX0kN0vq',
        ]);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
