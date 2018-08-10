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
            $table->string('last_name');
            $table->string('display_name');
            $table->string('e_mail');
            $table->integer('age');
            $table->string('password');
            $table->text('description');
            $table->string('src');
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}