<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('first_name');
            $table->string('email');
            $table->text('password');
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}