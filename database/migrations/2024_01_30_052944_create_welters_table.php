<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welters', function (Blueprint $table) {
            $table->id();
            $table->string('boxer');
            $table->string('weight');
            $table->string('class')->default('Welter');
            $table->unsignedBigInteger('rates_id');
            $table->foreign('rates_id')->references('id')->on('rates');
            $table->unsignedBigInteger('boxersid');
            $table->foreign('boxersid')->references('id')->on('boxers');
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
        Schema::dropIfExists('welters');
    }
}
