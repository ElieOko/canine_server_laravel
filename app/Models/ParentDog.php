<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentDog extends Model
{
    //
    protected $fillable = [
        "dog_male_id",
        "dog_female_id"
    ];
}
