<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //
    protected $fillable = [
        'nom',
        'prenom',
        'postnom',
        'genre',
        'telephone',
        'date_naissance',
        'image_profil',
        'profession_id',
        'adresse',
        'is_active',
        'user_id'
    ];

}
