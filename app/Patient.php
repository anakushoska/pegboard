<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $fillable = ["name", "email", "gender", "date_of_birth"];
}
