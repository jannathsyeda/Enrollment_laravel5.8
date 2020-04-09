<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('contact');
            $table->integer('cgpa');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_models');
    }
}
