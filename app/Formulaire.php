<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    protected $fillable = [
        'name','lastname', 'email', 'direction',
        'nomForm','discForm','cible','valid', 'besoin',
        'comp','niveau','objectif','urgence','importance','created_at'
    ];
}
