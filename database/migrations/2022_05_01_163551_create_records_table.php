<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('fish_id');
            $table->unsignedBigInteger('port_id');
            $table->foreign('fish_id')->references('fish_id')->on('fish')->onDelete('cascade');;
            $table->foreign('port_id')->references('port_id')->on('ports')->onDelete('cascade');
            $table->integer('catch');
            $table->bigInteger('date');
            $table->string('status');
            $table->integer('price_from');
            $table->integer('price_to');
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
};
