<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('games')->delete();


            DB::table('games')->insert([
                ["id" => 1, "name" => "Freestyle", "parent_id" => 0],
                ["id" => 2, "name" => "Row Completion","parent_id" => 0],
                ["id" => 3, "name" => "Horisontal", "parent_id" => 2 ],
                ["id" => 4, "name" => "Vertical", "parent_id" => 2 ],
                ["id" => 5, "name" => "Diagonal right","parent_id" => 2 ],
                ["id" => 6, "name" => "Diagonal left", "parent_id" => 2 ],
                ["id" => 7, "name" => "Shape Completion", "parent_id" => 0],
                ["id" => 8, "name" => "Blackout","parent_id" => 0],
                ["id" => 9, "name" => "Start from left",  "parent_id" => 8],
                ["id" => 10, "name" => "Start from right",  "parent_id" => 8],
                ["id" => 11, "name" => "Start from top",  "parent_id" => 8],
                ["id" => 12, "name" => "Start from bottom",  "parent_id" => 8],
                ["id" => 13, "name" => "Randomizer",  "parent_id" => 0],
                ["id" => 14, "name" => "Smash a mole", "levels" => 10, "parent_id" => 0],
                ["id" => 15, "name" => "Snake trap", "levels" => 10, "parent_id" => 0],
                ["id" => 16, "name" => "Visual training 1", "levels" => 10, "parent_id" => 0],
                ["id" => 17, "name" => "Left visual stimulus", "levels" => 10, "parent_id" => 16],
                ["id" => 18, "name" => "Right visual stimulus", "levels" => 10, "parent_id" => 16],
                ["id" => 19, "name" => "Visual training 2", "levels" => 10, "parent_id" => 0],
                ["id" => 20, "name" => "Left visual stimulus", "levels" => 10, "parent_id" => 19],
                ["id" => 21, "name" => "Right visual stimulus", "levels" => 10, "parent_id" => 19],
                ["id" => 22, "name" => "Shape recognition", "levels" => 10, "parent_id" => 0],
                ["id" => 23, "name" => "Memory placement", "levels" => 10, "parent_id" => 0],
                ["id" => 24, "name" => "Simon Says 1", "levels" => 10, "parent_id" => 0],
                ["id" => 25, "name" => "Simon Says 2", "levels" => 10, "parent_id" => 0],
                ["id" => 26, "name" => "Pathfinder", "levels" => 10, "parent_id" => 0],
                ["id" => 27, "name" => "Find Home", "levels" => 10, "parent_id" => 0],

            ]);

    }
}
