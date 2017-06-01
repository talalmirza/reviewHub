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
            $table->string('username')->unique();
            $table->string('profile_url')->unique();

            $table->string('password');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('avatar')->nullable();

            $table->date('date_of_birth');
            $table->string('city');
            $table->string('region');
            $table->boolean('gender');

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
