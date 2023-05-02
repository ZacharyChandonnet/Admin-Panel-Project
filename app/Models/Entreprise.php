<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'type', 'description', 'specialite', 'adresse', 'email', 'phone', 'code_postal', 'personne_ressource', 'img_url'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    // public function favorables()
    // {
    //     return $this->morphedByMany(User::class, 'favorable', 'favoris');
    // }

    public function regionsList()
    {
        return $this->hasMany(Region::class)->select(['id', 'nom', 'region_id'])->orderBy('nom');
    }

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }

    public function getUrlAttribute()
    {
        return route('entreprise.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.entreprise.show', $this);
    }
}
