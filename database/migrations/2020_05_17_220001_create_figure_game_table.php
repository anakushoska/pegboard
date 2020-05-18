<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFigureGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figure_game', function (Blueprint $table) {
            $table->smallInteger("game_id")->unsigned();
            $table->tinyInteger("figure_id")->unsigned();
            $table->integer("level")->nullable()->unsigned();;
            $table->integer("target")->nullable()->unsigned();;

            $table->foreign("figure_id")->references("id")->on("figures");
            $table->foreign("game_id")->references("id")->on("games");

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figure_game');
    }
}
