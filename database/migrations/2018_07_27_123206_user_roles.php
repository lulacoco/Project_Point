<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class UserRoles extends Migration
{
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('user_roles', function (Blueprint $table)
        {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('user_roles', function (Blueprint $table) {
            $table->foreign('role_id')
                ->references('id')
                ->on('roles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}