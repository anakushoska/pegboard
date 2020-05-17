<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    const FREESTYLE_ID = 1;
    // const GAME_NAME = "Freestyle";
    const ROW_COMPLETION_ID = 2;
    // const GAME_NAME = "Row completion";
    const SHAPE_COMPLETION_ID = 7;
    // const GAME_NAME = "Shape completion";
    const BLACKOUT_ID = 8;
    // const GAME_NAME = "Blackout";
    const RANDOMIZER_ID = 13;
    const SMASH_A_MOLE_ID = 14;
    const SNAKE_TRAP_ID = 15;
    const VISUAL_TRAINING_1_ID=16;
    const VISUAL_TRAINING_2_ID=19;
    const SHAPE_RECOGNITION_ID=22;
    const MEMORY_PLACEMENT_ID=23;
    const SIMON_SAYS_1_ID=24;
    const SIMON_SAYS_2_ID=25;
    const PATH_FINDER_ID=26;
    const FIND_HOME_ID=27;


    const FIELDS_TO_PROCESS_FREESTYLE = [
        'figure_id',
        'time',
        'used',
        'avg_time',
    ];

    const FIELDS_TO_PROCESS_PATH_FINDER_FIND_HOME= [
        'figure_id',
        'time',
        'success_rate',
        'used',
    ];

    const FIELDS_TO_PROCESS_STANDARD= [

        'time',
        'correct',
        'incorrect',
        'success_rate',
        'avg_time',
    ];


    const FREESTYLE_CREATION_RULES_DASHBOARD = [
        'figure_id' =>'required',
        'time' => 'required|integer|min:1',
        'used' => 'required|integer|min:1',
        'avg_time' => 'required|between:0,99.99',
    ];

    const PATH_FINDER_FIND_HOME_CREATION_RULES_DASHBOARD = [
        'figure_id' =>'required',
        'time' => 'required|integer|min:1',
        'used' => 'required|integer|min:1',
        'success_rate' =>'required|between:0,99.99',
    ];

    const STANDARD_CREATION_RULES_DASHBOARD = [

        'time' => 'required|integer|min:1',
        'correct' => 'required|integer|min:1',
        'incorrect' => 'required|integer|min:1',
        'success_rate' =>'required|between:0,99.99',
        'avg_time' => 'required|between:0,99.99',
    ];







    public function parentGame()
    {
        return $this->hasOne(Game::class, "id", "parent_id");
    }

    public function childrenGames()
    {
        return $this->hasMany(Game::class, "parent_id", "id");
    }
}
