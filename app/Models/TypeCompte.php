<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCompte extends Model
{
    //
    protected $fillable = [
        "name",
        "level_access",
        "is_active"
    ];
}
