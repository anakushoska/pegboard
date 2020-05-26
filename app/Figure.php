<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    const STANDARD_PEGS_ID = 1;
    const MIXED_SHAPED_PEGS_ID = 2;
    const PINCH_PEGS_ID = 3;

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
