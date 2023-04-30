<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'specialite'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    public function getUrlAttribute()
    {
        return route('region.show', $this);
    }
    public function getUrlApiAttribute()
    {
        return route('api.region.show', $this);
    }
}
