<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Records extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('boxer');
            $table->integer('win');
            $table->integer('lose');
            $table->integer('draw');
            $table->string('ko');
            $table->integer('bouts');
            $table->unsignedBigInteger('boxers_id');
            $table->foreign('boxers_id')->references('id')->on('boxers');           
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
        Schema::dropIfExists('records');
    }
}
