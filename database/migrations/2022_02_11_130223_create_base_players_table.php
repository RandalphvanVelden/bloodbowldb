<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_players', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('position');
            $table->integer('MA');
            $table->integer('ST');
            $table->integer('AG');
            $table->integer('PA');
            $table->integer('AV');
            $table->integer('value');
            $table->string('type');
            $table->integer('base_team_id')->unsigned();
            $table->foreign('base_team_id')->references('id')->on('base_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_players');
    }
}