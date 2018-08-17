<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Workshops extends Migration
{
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->boolean('public');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('workshops');
    }
}
