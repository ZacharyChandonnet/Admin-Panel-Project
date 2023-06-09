<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'categorie',];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    public function getUrlAttribute()
    {
        return route('secteur.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.secteur.show', $this);
    }

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
}
