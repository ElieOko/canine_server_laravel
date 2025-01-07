<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //
    protected $fillable = [
        'nom_famille',
        'prenom',
        'genre',
        'telephone',
        'date_naissance',
        'image_profil',
        'adresse',
        'is_active',
        'user_id'
    ];

}
