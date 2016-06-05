<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bins', function (Blueprint $table) {
            $table->increments('id');
            $table->double('lat', 17, 14);
            $table->double('lng', 17, 14);
            $table->integer('bin_id');
            $table->dateTime('time')->nullable();
            $table->timestamps();
            $table->string('data')->nullable();
            $table->integer('team')->nullable();
            $table->double('powerLevel')->nullable();
            $table->double('pirValue')->nullable();
            $table->double('colourValue')->nullable();
            $table->double('binCapacity')->nullable();
            $table->double('solarValue')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bins');
    }
}
