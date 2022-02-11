<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseSecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_secondaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->integer('base_player_id')->unsigned();
            $table->foreign('base_player_id')->references('id')->on('base_players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_secondaries');
    }
}
