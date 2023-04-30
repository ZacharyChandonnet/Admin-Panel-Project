<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $hebergement = Hebergement::orderBy('id')->get(['id', 'nom', 'type', 'description', 'etoile', 'prix', 'statut', 'dispo', 'nb_dispo', 'adresse', 'phone' ]);
        $hebergement
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $hebergement;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        return redirect()->route('hebergement.edit',$hebergement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function show(Hebergement $hebergement)
    {
        return $hebergement;
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
        dd($request->file());
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