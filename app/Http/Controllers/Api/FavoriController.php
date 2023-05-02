<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favori;
use App\Http\Requests\StoreFavoriRequest;
use App\Http\Requests\UpdateFavoriRequest;
use App\Models\User;
use Illuminate\Support\Str;

class FavoriController extends Controller
{
    public function aimer($type, $id)
    {
        $type = Str::plural($type);
        $user = User::find(1);
        $user->$type()->toggle($id);
    }
}
