<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprints $table){
            $table->bigIncrement('id');
            $table->string('name');
            $table->char('matricNo',9)->unique();
            $table->string('email')->unique();
            $table->string('course');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }

}