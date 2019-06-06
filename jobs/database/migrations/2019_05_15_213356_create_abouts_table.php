<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('title');
            $table->longText('description');
            $table->string('city');
            $table->string('salary');   
            $table->string('category'); 
            $table->string('email')->unique();
            $table->string('company_logo');
            $table->string('checkue_pic');
            $table->date('deadline');
            $table->integer('isPublished');
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
        Schema::dropIfExists('abouts');
    }
}
