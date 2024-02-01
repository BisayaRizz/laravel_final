<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('boxer_name');
            $table->string('height');
            $table->string('weight');
            $table->string('weight_class');
            $table->string('reach');
            $table->string('ape_index');
            $table->string('stance');
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
        Schema::dropIfExists('stats');
    }
}
