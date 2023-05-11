<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'specialite',];

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

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    public function getEstAimeAttribute()
    {
        if (auth()->guest()) {
            return false;
        }
        // if (auth()->check()) {
        //     return true;
        // }
        $user = auth()->user();
        //$user = User::find(1);  // temporaire
        return $this->fans()->where('user_id', $user->id)->count() > 0;
        //return $this->fans()->count();
    }
}
