<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewersTable extends Migration
{

    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('username')->unique();
            $table->string('profile_url')->unique();
            $table->string('password');

            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('avatar');

            $table->date('date_of_birth');
            $table->string('city');
            $table->string('region');
            $table->bigInteger('contact')->unsigned()->nullable();
            $table->boolean('gender');

            //-----------Below are reviewer functionality based columns
            $table->integer('rating')->default(0); //0,1-5
            $table->text('about')->nullable();


            $table->smallInteger('rank_id');
            $table->timestamps();

            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviewers');
    }
}
