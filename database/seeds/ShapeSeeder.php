<?php

use Illuminate\Database\Seeder;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shapes')->delete();

        DB::table('shapes')->insert([
            ["id" => 1, "name" => "Tilde", "total_pegs" => 9, "figure_id" => 1],
            ["id" => 2, "name" => "Question mark", "total_pegs" => 10, "figure_id" => 1],
            ["id" => 3, "name" => "Romb", "total_pegs" => 12, "figure_id" => 1],
            ["id" => 4, "name" => "Heart", "total_pegs" => 14, "figure_id" => 1],
            ["id" => 5, "name" => "Key", "total_pegs" => 14, "figure_id" => 1],
            ["id" => 6, "name" => "Stairs", "total_pegs" => 15, "figure_id" => 1],
            ["id" => 7, "name" => "Square", "total_pegs" => 16, "figure_id" => 1],
            ["id" => 8, "name" => "Diamond", "total_pegs" => 16, "figure_id" => 1],
            ["id" => 9, "name" => "Note", "total_pegs" => 18, "figure_id" => 1],
            ["id" => 10, "name" => "Fish", "total_pegs" => 19, "figure_id" => 1],
            ["id" => 11, "name" => "Boat", "total_pegs" => 25, "figure_id" => 1],
            ["id" => 12, "name" => "Number 25", "total_pegs" => 25, "figure_id" => 1],
            ["id" => 13, "name" => "Smile", "total_pegs" => 11, "figure_id" => 3],
            ["id" => 14, "name" => "Romb", "total_pegs" => 13, "figure_id" => 3],
            ["id" => 15, "name" => "House", "total_pegs" => 15, "figure_id" => 3],
            ["id" => 16, "name" => "Heart", "total_pegs" => 16, "figure_id" => 3],
            ["id" => 17, "name" => "Hourglass", "total_pegs" => 16, "figure_id" => 3],
            ["id" => 18, "name" => "Boat", "total_pegs" => 18, "figure_id" => 3],
            ["id" => 19, "name" => "Square", "total_pegs" => 20, "figure_id" => 3],
            ["id" => 20, "name" => "Arrow", "total_pegs" => 21, "figure_id" => 3],
            ["id" => 21, "name" => "Diamond", "total_pegs" => 21, "figure_id" => 3],

        ]);
    }
}
