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
        Schema::create('fish', function (Blueprint $table) {
            $table->id('fish_id');
            $table->string('fish_name');
            $table->string('local_name');
            $table->string('scientific_name');
            $table->longText('feature');
            $table->longText('development');
            $table->longText('diet');
            $table->string('image')->nullable();
            $table->string('top_fish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish');
    }
};
