<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('role');
        });

        //make a table for meetings
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('meet_id');
            $table->integer('meet_from');
            $table->integer('meet_to');
            $table->string('meet_location');
            $table->time('meet_time');
            $table->date('meet_date');
        });

        //make a table for messages
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
