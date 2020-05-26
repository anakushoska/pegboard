<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function resultDetails()
    {
        return $this->hasMany(ResultDetails::class);
    }
}
