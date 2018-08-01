<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserGroups extends Migration
{
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('user_groups', function (Blueprint $table)
        {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('user_groups', function (Blueprint $table)
        {
            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
