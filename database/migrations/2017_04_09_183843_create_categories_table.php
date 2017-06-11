<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned()->unique();
            $table->string('name')->unique();
            $table->integer('paladin_id');
            $table->string('vector');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
