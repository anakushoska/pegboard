<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model


{
    use SoftDeletes;
    protected $fillable = ["name", "email", "gender", "date_of_birth"];
}
