<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '255');
            $table->text('short_text');
            $table->longText('description')->nullable();
            $table->string('lang', '255')->nullable();
            $table->string('type_site', '255');
            $table->string('price_uah', '255');
            $table->string('tzfile', '255')->nullable();
            $table->date('from_date');
            $table->date('to_date');
            $table->string('status', '255')->nullable();
            $table->string('code', '255')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
