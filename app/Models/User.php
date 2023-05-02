<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'adresse',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'url_api',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function activites()
    {
        return $this->morphedByMany(Activite::class, 'favorable', 'favoris');
    }

    public function hebergements()
    {
        return $this->morphedByMany(Hebergement::class, 'favorable', 'favoris');
    }

    public function entreprises()
    {
        return $this->morphedByMany(Entreprise::class, 'favorable', 'favoris');
    }

    public function regions()
    {
        return $this->morphedByMany(Region::class, 'favorable', 'favoris');
    }

    public function evenements()
    {
        return $this->morphedByMany(Evenement::class, 'favorable', 'favoris');
    }

    public function forfaits()
    {
        return $this->morphedByMany(Forfait::class, 'favorable', 'favoris');
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
