<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::orderBy('id')->get(['id', 'nom', 'description', 'specialite',]);
        $regions
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $regions;
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
     * @param  \App\Http\Requests\StoreRegionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionRequest $request)
    {
        $region = new Region();
        $data = $request->all();
        $region->fill($data);
        $region->save();
        return redirect()->route('region.edit',$region);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        $region->append("est_aime");
        return $region;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('region.edit', ['region' => $region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegionRequest  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionRequest $request, Region $region)
    {
        $data = $request->all();
        dd($request->file());
        $region = $region->fill($data);
        $region->save();
        return redirect()->route('region.edit', $region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }

    public function aimer(Region $region)
    {
        $user = Auth::user();
        //$user = auth()->user();
        //$user = User::find(1);  // temporaire
        $etat = $region->fans()->toggle($user);
        $etat = $etat["attached"];
        $etat = count($etat);
        $etat = $etat > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $region->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
