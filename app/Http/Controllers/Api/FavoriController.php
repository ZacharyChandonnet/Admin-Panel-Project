<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use App\Http\Requests\StoreFavoriRequest;
use App\Http\Requests\UpdateFavoriRequest;

class FavoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFavoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function show(Favori $favori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function edit(Favori $favori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoriRequest  $request
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriRequest $request, Favori $favori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favori $favori)
    {
        //
    }
}
