<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name')->nullable();
            $table->smallInteger("game_id")->unsigned();
            $table->integer("result_id")->unsigned();
            $table->tinyInteger("figure_id")->unsigned();
            $table->Integer("shape_id")->nullable()->unsigned();
            $table->Integer("level_id")->nullable()->unsigned();
            $table->Integer("target")->nullable()->unsigned();
            $table->integer("time")->nullable()->unsigned();
            $table->integer("correct")->nullable()->unsigned();
            $table->integer("incorrect")->nullable()->unsigned();
            $table->decimal("success_rate",4,2)->nullable()->unsigned();
            $table->decimal("avg_time", 5, 2)->nullable()->unsigned();
            $table->integer("used")->nullable()->unsigned();
            $table->timestamps();

            $table->foreign("shape_id")->references("id")->on("shapes");
            $table->foreign("figure_id")->references("id")->on("figures");
            $table->foreign("level_id")->references("id")->on("levels");
            $table->foreign("result_id")->references("id")->on("results");
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
        Schema::dropIfExists('result_details');
    }
}
