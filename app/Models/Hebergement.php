<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'type', 'description', 'etoile', 'prix', 'statut', 'nb_dispo', 'adresse', 'phone'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    public function getUrlAttribute()
    {
        return route('entreprise.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.entreprise.show', $this);
    }

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }
}
