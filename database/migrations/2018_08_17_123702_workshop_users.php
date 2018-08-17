<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkshopUsers extends Migration
{
    public function up()
    {
        Schema::create('workshop_users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('workshop_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('workshop_users', function (Blueprint $table)
        {
            $table->foreign('workshop_id')
                ->references('id')
                ->on('workshops');
        });

        Schema::table('workshop_users', function (Blueprint $table)
        {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('workshop_users');
    }
}
