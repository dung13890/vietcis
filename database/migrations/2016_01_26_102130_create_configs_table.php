<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('google');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('timeword');
            $table->integer('office');
            $table->integer('staff');
            $table->integer('born');
            $table->text('content');
            $table->string('introleft');
            $table->string('introright');
            $table->string('copyright');
            $table->string('logo1');
            $table->string('logo2');
            $table->dateTime('countdown');
            $table->string('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configs');
    }
}
