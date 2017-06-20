<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{

    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('username')->nullable();
            

            $table->string('password')->nullable();
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('avatar')->nullable();

            $table->date('date_of_birth')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->boolean('gender')->nullable();

            $table->text('bio')->nullable();

            $table->timestamps();
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
