<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
use App\Figure;

class ResultDetails extends Model
{
    protected $fillable = ["name", "game_id", "result_id", "figure_id","shape_id", "level_id","target", "time", "correct", "incorrect", "total", "success_rate", "avg_time", "used" ];


    public function game()
    {
        return $this->belongsTo(Game::class, "game_id");
    }

    public function figure()
    {
        return $this->belongsTo(Figure::class, "figure_id");
    }

}

