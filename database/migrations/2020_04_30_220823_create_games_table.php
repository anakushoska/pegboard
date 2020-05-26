<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->string('training_type');
            $table->text('description')->nullable();
            $table->integer("parent_id")->unsigned();
            $table->integer("target")->nullable()->unsigned();
            $table->integer("stages")->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
