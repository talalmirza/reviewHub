<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{

    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned()->unique();
            $table->string('title')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ranks');
    }
}
