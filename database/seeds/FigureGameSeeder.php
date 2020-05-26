<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ["game_id" => "1", "figure_id" => 1, "level" => "", "target" =>0],
            ["game_id" => "1", "figure_id" => 2, "level" =>"", "target" =>0],
            ["game_id" => "1", "figure_id" => 3, "level" => "", "target" =>0],
            ["game_id" => "2", "figure_id" => 1, "level" => "", "target" =>0],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Tilde" , "target" => 9],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Question mark" , "target" => 10],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Romb" , "target" => 12],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Heart" , "target" => 14],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Key" , "target" => 14],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Stairs" , "target" => 15],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Square" , "target" => 16],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Diamond" , "target" => 16],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Note" , "target" => 18],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Fish" , "target" => 19],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Boat" , "target" => 25],
            ["game_id" => "7", "figure_id" => 1, "level" =>"Number" , "target" => 25],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Smile" , "target" => 11],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Romb" , "target" => 13],
            ["game_id" => "7", "figure_id" => 3, "level" =>"House" , "target" => 15],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Heart" , "target" => 16],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Hourglass" , "target" => 16],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Boat" , "target" => 18],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Square" , "target" => 20],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Arrow" , "target" => 21],
            ["game_id" => "7", "figure_id" => 3, "level" =>"Diamond" , "target" => 21],
            ["game_id" => "8", "figure_id" => 2, "level" => "", "target" =>0],
            ["game_id" => "13", "figure_id" => 1, "level" => "Level 1", "target" =>10],
            ["game_id" => "13", "figure_id" => 1, "level" => "Level 2", "target" =>20],
            ["game_id" => "13", "figure_id" => 1, "level" => "Level 3", "target" =>30],
            ["game_id" => "13", "figure_id" => 2, "level" => 0, "target" =>10],
            ["game_id" => "13", "figure_id" => 3, "level" => 0, "target" =>15],
            ["game_id" => "14", "figure_id" => 1, "level" => "Level 1", "target" =>10],
            ["game_id" => "14", "figure_id" => 1, "level" => "Level 2", "target" =>20],
            ["game_id" => "14", "figure_id" => 1, "level" => "Level 3", "target" =>30],
            ["game_id" => "14", "figure_id" => 2, "level" => "", "target" =>10],
            ["game_id" => "14", "figure_id" => 3, "level" => "", "target" =>15],
            ["game_id" => "15", "figure_id" => 1, "level" => "Level 1", "target" =>10],
            ["game_id" => "15", "figure_id" => 1, "level" => "Level 2", "target" =>15],
            ["game_id" => "15", "figure_id" => 1, "level" => "Level 3", "target" =>20],
            ["game_id" => "15", "figure_id" => 2, "level" => "", "target" =>10],
            ["game_id" => "15", "figure_id" => 3, "level" => "", "target" =>15],
            ["game_id" => "16", "figure_id" => 1, "level" => "", "target" =>0],
            ["game_id" => "19", "figure_id" => 1, "level" => "", "target" =>0],
            ["game_id" => "22", "figure_id" => 2, "level" => "", "target" =>0],
            ["game_id" => "23", "figure_id" => 1, "level" => "Level 1", "target" =>3],
            ["game_id" => "23", "figure_id" => 1, "level" => "Level 2", "target" =>4],
            ["game_id" => "23", "figure_id" => 1, "level" => "Level 3", "target" =>5],
            ["game_id" => "23", "figure_id" => 2, "level" => "Level 1", "target" =>2],
            ["game_id" => "23", "figure_id" => 2, "level" => "Level 2", "target" =>3],
            ["game_id" => "23", "figure_id" => 2, "level" => "Level 3", "target" =>4],
            ["game_id" => "23", "figure_id" => 3, "level" => "Level 1", "target" =>3],
            ["game_id" => "23", "figure_id" => 3, "level" => "Level 2", "target" =>5],
            ["game_id" => "24", "figure_id" => 1, "level" => "Level 1", "target" =>3],
            ["game_id" => "24", "figure_id" => 1, "level" => "Level 2", "target" =>5],
            ["game_id" => "24", "figure_id" => 1, "level" => "Level 3", "target" =>7],
            ["game_id" => "24", "figure_id" => 2, "level" => "Level 1", "target" =>3],
            ["game_id" => "24", "figure_id" => 2, "level" => "Level 2", "target" =>5],
            ["game_id" => "24", "figure_id" => 2, "level" => "Level 3", "target" =>7],
            ["game_id" => "24", "figure_id" => 3, "level" => "Level 1", "target" =>4],
            ["game_id" => "24", "figure_id" => 3, "level" => "Level 2", "target" =>6],
            ["game_id" => "25", "figure_id" => 1, "level" => "Level 1", "target" =>3],
            ["game_id" => "25", "figure_id" => 1, "level" => "Level 2", "target" =>4],
            ["game_id" => "25", "figure_id" => 1, "level" => "Level 3", "target" =>5],
            ["game_id" => "25", "figure_id" => 2, "level" => "Level 1", "target" =>2],
            ["game_id" => "25", "figure_id" => 2, "level" => "Level 2", "target" =>3],
            ["game_id" => "25", "figure_id" => 2, "level" => "Level 3", "target" =>4],
            ["game_id" => "25", "figure_id" => 3, "level" => "Level 1", "target" =>3],
            ["game_id" => "25", "figure_id" => 3, "level" => "Level 2", "target" =>5],
            ["game_id" => "26", "figure_id" => 1, "level" => "Level 1", "target" =>0],
            ["game_id" => "26", "figure_id" => 1, "level" => "Level 2", "target" =>0],
            ["game_id" => "26", "figure_id" => 1, "level" => "Level 3", "target" =>0],
            ["game_id" => "26", "figure_id" => 2, "level" => "", "target" =>0],
            ["game_id" => "26", "figure_id" => 3, "level" => "", "target" =>0],
            ["game_id" => "27", "figure_id" => 1, "level" => "Level 1", "target" =>5],
            ["game_id" => "27", "figure_id" => 1, "level" => "Level 2", "target" =>10],
            ["game_id" => "27", "figure_id" => 1, "level" => "Level 3", "target" =>15],
            ["game_id" => "27", "figure_id" => 2, "level" => "", "target" =>10],
            ["game_id" => "27", "figure_id" => 3, "level" => "", "target" =>15],
            ]);
        }
}
