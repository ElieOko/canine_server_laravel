<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //
    protected $fillable = [
        "loc",
        "name",
        "nickname",
        "caracteristique",
        "date_naissance",
        'owner_dog_id',
        "parent_id",
        "dog_type_id"
    ];
}
