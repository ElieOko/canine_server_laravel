<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleveur extends Model
{
    //
    protected $fillable = [
        'matricule',
        'personnel_id',
        'is_active'
    ];
}
