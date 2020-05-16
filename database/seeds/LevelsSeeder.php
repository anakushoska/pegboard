<?php

use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->delete();

        DB::table('levels')->insert([
            ["id" => 1, "name" => "Level 1"],
            ["id" => 2, "name" => "Level 2"],
            ["id" => 3, "name" => "Level 3"]
        ]);
    }
}
