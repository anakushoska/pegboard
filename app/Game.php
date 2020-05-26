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



    const FIELDS_TO_PROCESS_STANDARD= [

        'time',
        'correct',
        'incorrect',

    ];



    const STANDARD_CREATION_RULES_DASHBOARD = [

        'time' => 'required|integer|min:1',
        'correct' => 'required|integer|min:1',
        'incorrect' => 'required|integer',
    ];







    public function parentGame()
    {
        return $this->hasOne(Game::class, "id", "parent_id");
    }

    public function childrenGames()
    {
        return $this->hasMany(Game::class, "parent_id", "id");
    }


    public function figures()
    {
        return $this->belongsToMany('App\Figure')
                    ->withPivot('level', 'target');
    }
}
