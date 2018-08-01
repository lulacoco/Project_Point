<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventGroups extends Migration
{
    public function up()
    {
        Schema::create('event_groups', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('event_groups', function (Blueprint $table)
        {
            $table->foreign('event_id')
                ->references('id')
                ->on('events');
        });

        Schema::table('event_groups', function (Blueprint $table)
        {
            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_groups');
    }
}