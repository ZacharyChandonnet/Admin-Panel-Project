<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaite extends Model
{
    use HasFactory;

    protected $fillable = ['commentaire', 'date', 'cote',];

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
}
