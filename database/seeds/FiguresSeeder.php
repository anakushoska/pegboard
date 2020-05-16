<?php

use Illuminate\Database\Seeder;

class FiguresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('figures')->delete();

                DB::table('figures')->insert([
                    ["id" => 1, "name" => "Standard pegs", "number_of_pegs" => 63],
                    ["id" => 2, "name" => "Mixed shape pegs", "number_of_pegs" => 20],
                    ["id" => 3, "name" => "Pinch pegs", "number_of_pegs" => 35]
                ]);
    }
}
