<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventUsers extends Migration
{
    public function up()
    {
        Schema::create('event_users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('event_users', function (Blueprint $table)
        {
            $table->foreign('event_id')
                ->references('id')
                ->on('events');
        });

        Schema::table('event_users', function (Blueprint $table)
        {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_users');
    }
}
