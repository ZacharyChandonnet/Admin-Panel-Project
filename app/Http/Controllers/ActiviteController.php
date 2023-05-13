<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Http\Requests\StoreActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::orderBy('nom')->get();
        return view('activite.index', ['activites' => $activites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activite = new Activite();
        return view('activite.create', ['activite' => $activite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActiviteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActiviteRequest $request)
    {
        $activite = new Activite();
        $data = $request->all();
        $activite->fill($data);
        $activite->save();
        return redirect()->route('activite.edit', $activite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        return view('activite.edit', ['activite' => $activite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActiviteRequest  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActiviteRequest $request, Activite $activite)
    {
        $data = $request->all();
        $activite = $activite->fill($data);
        $activite->save();
        return redirect()->route('activite.edit', $activite);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        $activite->delete();
        return redirect()->route('activite.index');
    }
}
