<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'postnom',
        'genre',
        'telephone',
        'specialite',
        'structure',
        'date_naissance',
        'image_profil',
        'profession_id',
        'adresse',
        'is_active',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
}
