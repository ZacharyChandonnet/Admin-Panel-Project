<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Http\Requests\StoreForfaitRequest;
use App\Http\Requests\UpdateForfaitRequest;
use Illuminate\Support\Facades\Auth;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfait = Forfait::orderBy('id')->get(['id', 'nom', 'type', 'description', 'prix', 'date_debut', 'date_fin', 'emplacement', 'dispo',]);
        $forfait
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $forfait;
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
     * @param  \App\Http\Requests\StoreForfaitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForfaitRequest $request)
    {
        $forfait = new Forfait();
        $data = $request->all();
        $forfait->fill($data);
        $forfait->save();
        return redirect()->route('forfait.edit', $forfait);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        $forfait->append("est_aime");
        return $forfait;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        return view('forfait.edit', ['forfait' => $forfait]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForfaitRequest  $request
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForfaitRequest $request, Forfait $forfait)
    {
        $data = $request->all();
        dd($request->file());
        $forfait = $forfait->fill($data);
        $forfait->save();
        return redirect()->route('forfait.edit', $forfait);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        //
    }

    public function aimer(Forfait $forfait)
    {
        $user = Auth::user();
        //$user = auth()->user();
        //$user = User::find(1);  // temporaire
        $etat = $forfait->fans()->toggle($user);
        $etat = $etat["attached"];
        $etat = count($etat);
        $etat = $etat > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $forfait->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
