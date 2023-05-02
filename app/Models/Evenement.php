<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'date_debut', 'date_fin', 'ville', 'emplacement', 'description', 'prix'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }

     public function getUrlAttribute()
    {
        return route('evenement.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.evenement.show', $this);
    }
}
