<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use App\Http\Requests\StoreSecteurRequest;
use App\Http\Requests\UpdateSecteurRequest;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteurs = Secteur::orderBy('nom')->get();
        return view('secteur.index', ['secteurs' => $secteurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secteur = new Secteur();
        return view('secteur.create', ['secteur' => $secteur]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecteurRequest $request)
    {
        $secteur = new Secteur();
        $data = $request->all();
        $secteur->fill($data);
        $secteur->save();
        return redirect()->route('secteur.edit', $secteur);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function show(Secteur $secteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Secteur $secteur)
    {
        return view('secteur.edit', ['secteur' => $secteur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecteurRequest  $request
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecteurRequest $request, Secteur $secteur)
    {
        $data = $request->all();
        $secteur = $secteur->fill($data);
        $secteur->save();
        return redirect()->route('secteur.edit', $secteur);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secteur $secteur)
    {
        $secteur->delete();
        return redirect()->route('secteur.index');
    }
}
