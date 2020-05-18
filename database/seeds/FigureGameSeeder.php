<?php

use Illuminate\Database\Seeder;

class FigureGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('figure_game')->delete();
        DB::table('figure_game')->insert([
            ["game_id" => "1", "figure_id" => 1, "level" => 0, "target" =>0],
            ["game_id" => "1", "figure_id" => 2, "level" => 0, "target" =>0],
            ["game_id" => "1", "figure_id" => 3, "level" => 0, "target" =>0],
            ["game_id" => "2", "figure_id" => 1, "level" => 0, "target" =>0],
            ["game_id" => "3", "figure_id" => 1, "level" => 0, "target" =>0],
            ["game_id" => "3", "figure_id" => 2, "level" => 0, "target" =>0],
            ["game_id" => "4", "figure_id" => 2, "level" => 0, "target" =>0],
            ["game_id" => "5", "figure_id" => 1, "level" => 1, "target" =>10],
            ["game_id" => "5", "figure_id" => 1, "level" => 2, "target" =>20],
            ["game_id" => "5", "figure_id" => 1, "level" => 3, "target" =>30],
            ["game_id" => "5", "figure_id" => 2, "level" => 0, "target" =>10],
            ["game_id" => "5", "figure_id" => 3, "level" => 0, "target" =>15],
            ["game_id" => "6", "figure_id" => 1, "level" => 1, "target" =>10],
            ["game_id" => "6", "figure_id" => 1, "level" => 2, "target" =>20],
            ["game_id" => "6", "figure_id" => 1, "level" => 3, "target" =>30],
            ["game_id" => "6", "figure_id" => 2, "level" => 0, "target" =>10],
            ["game_id" => "6", "figure_id" => 3, "level" => 0, "target" =>15],
            ["game_id" => "7", "figure_id" => 1, "level" => 1, "target" =>10],
            ["game_id" => "7", "figure_id" => 1, "level" => 2, "target" =>15],
            ["game_id" => "7", "figure_id" => 1, "level" => 3, "target" =>20],
            ["game_id" => "7", "figure_id" => 2, "level" => 0, "target" =>10],
            ["game_id" => "7", "figure_id" => 3, "level" => 0, "target" =>15],
            ["game_id" => "8", "figure_id" => 1, "level" => 0, "target" =>0],
            ["game_id" => "9", "figure_id" => 1, "level" => 0, "target" =>0],
            ["game_id" => "10", "figure_id" => 2, "level" => 0, "target" =>0],
            ["game_id" => "11", "figure_id" => 1, "level" => 1, "target" =>3],
            ["game_id" => "11", "figure_id" => 1, "level" => 2, "target" =>4],
            ["game_id" => "11", "figure_id" => 1, "level" => 3, "target" =>5],
            ["game_id" => "11", "figure_id" => 2, "level" => 1, "target" =>2],
            ["game_id" => "11", "figure_id" => 2, "level" => 2, "target" =>3],
            ["game_id" => "11", "figure_id" => 2, "level" => 3, "target" =>4],
            ["game_id" => "11", "figure_id" => 3, "level" => 1, "target" =>3],
            ["game_id" => "11", "figure_id" => 3, "level" => 2, "target" =>5],
            ["game_id" => "12", "figure_id" => 1, "level" => 1, "target" =>3],
            ["game_id" => "12", "figure_id" => 1, "level" => 2, "target" =>5],
            ["game_id" => "12", "figure_id" => 1, "level" => 3, "target" =>7],
            ["game_id" => "12", "figure_id" => 2, "level" => 1, "target" =>3],
            ["game_id" => "12", "figure_id" => 2, "level" => 2, "target" =>5],
            ["game_id" => "12", "figure_id" => 2, "level" => 3, "target" =>7],
            ["game_id" => "12", "figure_id" => 3, "level" => 1, "target" =>4],
            ["game_id" => "12", "figure_id" => 3, "level" => 2, "target" =>6],
            ["game_id" => "13", "figure_id" => 1, "level" => 1, "target" =>3],
            ["game_id" => "13", "figure_id" => 1, "level" => 2, "target" =>4],
            ["game_id" => "13", "figure_id" => 1, "level" => 3, "target" =>5],
            ["game_id" => "13", "figure_id" => 2, "level" => 1, "target" =>2],
            ["game_id" => "13", "figure_id" => 2, "level" => 2, "target" =>3],
            ["game_id" => "13", "figure_id" => 2, "level" => 3, "target" =>4],
            ["game_id" => "13", "figure_id" => 3, "level" => 1, "target" =>3],
            ["game_id" => "13", "figure_id" => 3, "level" => 2, "target" =>5],
            ["game_id" => "14", "figure_id" => 1, "level" => 1, "target" =>0],
            ["game_id" => "14", "figure_id" => 1, "level" => 2, "target" =>0],
            ["game_id" => "14", "figure_id" => 1, "level" => 3, "target" =>0],
            ["game_id" => "14", "figure_id" => 2, "level" => 0, "target" =>0],
            ["game_id" => "14", "figure_id" => 3, "level" => 0, "target" =>0],
            ["game_id" => "15", "figure_id" => 1, "level" => 1, "target" =>5],
            ["game_id" => "15", "figure_id" => 1, "level" => 2, "target" =>10],
            ["game_id" => "15", "figure_id" => 1, "level" => 3, "target" =>15],
            ["game_id" => "15", "figure_id" => 2, "level" => 0, "target" =>10],
            ["game_id" => "15", "figure_id" => 3, "level" => 0, "target" =>15],
            ]);
        }
}
