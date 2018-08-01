<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groups extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
