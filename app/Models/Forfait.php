<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'type', 'description', 'prix', 'date', 'dispo',];

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
        return route('entreprise.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.entreprise.show', $this);
    }
}
