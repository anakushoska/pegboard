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
                ["id" => 1, "name" => "Freestyle", "training_type" => "", "description" => "The user is able to place pegs anywhere on the board for this activity. This allows for a baseline in terms of reaction time and this training activity is least cognitively demanding.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 2, "name" => "Row Completion", "training_type" => "","description" => "This training incorporates gradually extended reach in horizontal, vertical and diagonal patterns.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 3, "name" => "Row Completion","training_type" => "Horisontal", "description" => "This training incorporates gradually extended reach in horizontal, vertical and diagonal patterns.", "parent_id" => 2, "target" => 27, "stages" => 0 ],
                ["id" => 4, "name" => "Row Completion", "training_type" => "Vertical", "description" => "This training incorporates gradually extended reach in horizontal, vertical and diagonal patterns.", "parent_id" => 2, "target" => 21, "stages" => 0 ],
                ["id" => 5, "name" => "Row Completion", "training_type" => "Diagonal right", "description" => "This training incorporates gradually extended reach in horizontal, vertical and diagonal patterns.","parent_id" => 2, "target" => 21, "stages" => 0 ],
                ["id" => 6, "name" => "Row Completion", "training_type" => "Diagonal left","description" => "This training incorporates gradually extended reach in horizontal, vertical and diagonal patterns.", "parent_id" => 2, "target" => 21, "stages" => 0 ],
                ["id" => 7, "name" => "Shape Completion", "training_type" =>"", "description" =>"A training to complete shapes, by placing the pegs in the lit locations. This training incorporates vision and visual perceptual skills.", "parent_id" => 0, "target" => 0, "stages" => 0 ],
                ["id" => 8, "name" => "Blackout", "training_type" => "", "description" =>"The user is guided to fill the entire board by placing pegs in a sequence throughout the board.", "parent_id" => 0,"target" => 0, "stages" => 0 ],
                ["id" => 9, "name" => "Blackout", "training_type" => "Start from left", "description" =>"The user is guided to fill the entire board by placing pegs in a sequence throughout the board.",  "parent_id" => 8, "target" => 20, "stages" => 0 ],
                ["id" => 10, "name" => "Blackout", "training_type" => "Start from right", "description" =>"The user is guided to fill the entire board by placing pegs in a sequence throughout the board.",  "parent_id" => 8, "target" => 20, "stages" => 0 ],
                ["id" => 11, "name" => "Blackout", "training_type" => "Start from top", "description" =>"The user is guided to fill the entire board by placing pegs in a sequence throughout the board.",  "parent_id" => 8, "target" => 20, "stages" => 0 ],
                ["id" => 12, "name" => "Blackout", "training_type" => "Start from bottom", "description" =>"The user is guided to fill the entire board by placing pegs in a sequence throughout the board.",  "parent_id" => 8, "target" => 20, "stages" => 0 ],
                ["id" => 13, "name" => "Randomizer", "training_type" => "", "description" =>"This training involves placing the pegs at random in the lit locations. In Mixed Shape Board/Pinch board, the training includes “in hand manipulation” to increase the challenge of the experience.",  "parent_id" => 0,"target" => 0, "stages" => 0],
                ["id" => 14, "name" => "Smash a mole", "training_type" => "", "description" => "This training works on speed and reaction time to quickly put the pegs in the locations where a mole light appeared.", "parent_id" => 0,"target" => 0, "stages" => 0],
                ["id" => 15, "name" => "Snake trap", "training_type" => "", "description" => "A training to catch a snake (row of lights) before it slithers away across the pegboard. This training works on reaction time and hand-eye coordination of the user.", "parent_id" => 0,"target" => 0,"stages" => 0],
                ["id" => 16, "name" => "Visual training 1", "training_type" => "", "description" => "Pegs are placed one by one in the lit locations starting from left or right to complete series of rows. This training is intended to work on scanning ability and can be used for neglect and field cut training.", "parent_id" => 0,"target" => 0, "stages" => 0],
                ["id" => 17, "name" => "Visual training 1", "training_type" => "Left visual stimulus", "description" => "Pegs are placed one by one in the lit locations starting from left or right to complete series of rows. This training is intended to work on scanning ability and can be used for neglect and field cut training.", "parent_id" => 16, "target" => 21, "stages" => 0],
                ["id" => 18, "name" => "Visual training 1", "training_type" => "Right visual stimulus", "description" => "Pegs are placed one by one in the lit locations starting from left or right to complete series of rows. This training is intended to work on scanning ability and can be used for neglect and field cut training.",  "parent_id" => 16, "target" => 21, "stages" => 0],
                ["id" => 19, "name" => "Visual training 2", "training_type" => "", "description" => "A training to place a peg either in the middle or the end of lit locations after listening to a voice prompt. This training works on visual scanning and visual attention.", "parent_id" => 0,"target" => 0, "stages" => 0],
                ["id" => 20, "name" => "Visual training 2", "training_type" => "Left visual stimulus", "description" => "A training to place a peg either in the middle or the end of lit locations after listening to a voice prompt. This training works on visual scanning and visual attention.", "parent_id" => 19,"target" => 0, "stages" => 0],
                ["id" => 21, "name" => "Visual training 2", "training_type" => "Right visual stimulus", "description" => "A training to place a peg either in the middle or the end of lit locations after listening to a voice prompt. This training works on visual scanning and visual attention.", "parent_id" => 19, "target" => 0, "stages" => 0],
                ["id" => 22, "name" => "Shape recognition", "training_type" => "", "description" => "This training requires the user to identify the peg shape to place it appropriately on the shape board.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 23, "name" => "Memory placement", "training_type" => "", "description" => "A training to place the pegs by memorizing the lit holes. This training enhances memory and spatial cognitive ability of the user.", "parent_id" => 0, "target" => 0,"stages" => 0],
                ["id" => 24, "name" => "Simon Says 1", "training_type" => "", "description" => "A training to place the pegs in order by memorizing the sequence of lit holes. This training enhances memory and spatial cognitive ability of the user.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 25, "name" => "Simon Says 2", "training_type" => "", "description" => "A training to place the pegs in a reverse order by memorizing the sequence lit holes. This training enhances memory and spatial cognitive ability of the user.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 26, "name" => "Pathfinder", "training_type" => "", "description" => "A training to make a path to let three lit holes to pass by connecting the pegs. This training enhances problem solving skills of the user.", "parent_id" => 0, "target" => 0, "stages" => 0],
                ["id" => 27, "name" => "Find Home", "training_type" => "", "description" => "A training to make a moving light to reach Home(destination) by making a wall with pegs. This training enhances problem solving skills, attentiveness, and agility of the user.", "parent_id" => 0, "target" => 0, "stages" => 0],

            ]);

    }
}
