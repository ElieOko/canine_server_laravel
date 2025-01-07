<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinaire extends Model
{
    //
    protected $fillable = [
        'matricule',
        'personnel_id',
        'is_active'
    ];
}
