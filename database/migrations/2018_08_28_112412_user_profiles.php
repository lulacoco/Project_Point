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
            $table->integer('user_id')->unique();
            $table->string('last_name')->nullable();
            $table->string('display_name')->nullable();
            $table->integer('age')->nullable();
            $table->text('description')->nullable();
            $table->string('src')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('user_profiles');
    }
}
