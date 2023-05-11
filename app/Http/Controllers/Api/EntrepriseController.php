<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::orderBy('id')->get(['id', 'nom', 'img_url', 'type', 'description', 'specialite', 'adresse', 'email', 'phone', 'code_postal', 'personne_ressource',]);
        $entreprises
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $entreprises;
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
     * @param  \App\Http\Requests\StoreEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrepriseRequest $request)
    {
        $entreprise = new Entreprise();
        $data = $request->all();
        $entreprise->fill($data);
        $entreprise->save();
        return redirect()->route('entreprise.edit', $entreprise);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //$entreprise->load("fans");
        $entreprise->append("est_aime");
        return $entreprise;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprise.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntrepriseRequest  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $data = $request->all();
        dd($request->file());
        $entreprise = $entreprise->fill($data);
        $entreprise->save();
        return redirect()->route('entreprise.edit', $entreprise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }

    public function aimer(Entreprise $entreprise)
    {
        $user = Auth::user();
        //$user = auth()->user();
        //$user = User::find(1);  // temporaire
        $etat = $entreprise->fans()->toggle($user);
        $etat = $etat["attached"];
        $etat = count($etat);
        $etat = $etat > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $entreprise->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}