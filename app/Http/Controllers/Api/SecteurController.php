<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Secteur;
use App\Http\Requests\StoreSecteurRequest;
use App\Http\Requests\UpdateSecteurRequest;
use App\Models\User;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteur = Secteur::orderBy('id')->get(['id', 'nom', 'categorie',]);
        $secteur
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $secteur;
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
        return $secteur;
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
        dd($request->file());
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
        //
    }
}
