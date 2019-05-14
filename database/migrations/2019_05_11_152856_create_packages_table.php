<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('short_description')->nullable();
            $table->string('full_description')->nullable();
            $table->integer('days')->default(0);
            $table->float('price', 7, 2)->default(00001.00);
            $table->string('currency', 3)->default('USR');
            // ALTER TABLE packages ADD COLUMN price FLOAT(7,2) DEFAULT 00001.00 AFTER days;
            // ALTER TABLE packages ADD COLUMN currency VARCHAR(3) DEFAULT 'USD' AFTER price;
            $table->integer('is_visible')->default(1);
            $table->integer('is_delete')->default(0);
            $table->integer('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
