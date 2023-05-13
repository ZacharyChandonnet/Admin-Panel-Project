<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Http\Requests\StoreForfaitRequest;
use App\Http\Requests\UpdateForfaitRequest;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::orderBy('nom')->get();
        return view('forfait.index', ['forfaits' => $forfaits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfait();
        return view('forfait.create', ['forfait' => $forfait]);
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
        //
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
        $forfait->delete();
        return redirect()->route('forfait.index');
    }
}
