<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('skillName');
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
        Schema::dropIfExists('base_skills');
    }
}
