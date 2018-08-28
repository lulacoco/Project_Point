<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfiles extends Migration
{
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('last_name');
            $table->string('display_name');
            $table->integer('age');
            $table->text('description');
            $table->string('src');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('user_profiles');
    }
}
