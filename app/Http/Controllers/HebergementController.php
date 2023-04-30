<?php

namespace App\Http\Controllers;

use App\Models\Hebergement;
use App\Http\Requests\StoreHebergementRequest;
use App\Http\Requests\UpdateHebergementRequest;

class HebergementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hebergements = Hebergement::orderBy('nom')->get();
        return view('hebergement.index', ['hebergements' => $hebergements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hebergement = new Hebergement();
        return view('hebergement.create', ['hebergement' => $hebergement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHebergementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHebergementRequest $request)
    {
        $hebergement = new Hebergement();
        $data = $request->all();
        $hebergement->fill($data);
        $hebergement->save();
        return redirect()->route('hebergement.edit', $hebergement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function show(Hebergement $hebergement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function edit(Hebergement $hebergement)
    {
        return view('hebergement.edit', ['hebergement' => $hebergement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHebergementRequest  $request
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHebergementRequest $request, Hebergement $hebergement)
    {
        $data = $request->all();
        $hebergement = $hebergement->fill($data);
        $hebergement->save();
        return redirect()->route('hebergement.edit', $hebergement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hebergement $hebergement)
    {
        //
    }
}
