<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Commentaite;
use App\Http\Requests\StoreCommentaiteRequest;
use App\Http\Requests\UpdateCommentaiteRequest;

class CommentaiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaites = Commentaite::orderBy('id')->get(['id', 'commentaire', 'date', 'cote',]);
        $commentaites
            ->append(['url_api'])
            ->makeHidden(['created_at', 'updated_at']);
        return $commentaites;
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
     * @param  \App\Http\Requests\StoreCommentaiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentaiteRequest $request)
    {
        $commentaite = new Commentaite();
        $data = $request->all();
        $commentaite->fill($data);
        $commentaite->save();
        return redirect()->route('commentaite.edit', $commentaite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaite  $commentaite
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaite $commentaite)
    {
        return $commentaite;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaite  $commentaite
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaite $commentaite)
    {
        return view('commentaite.edit', ['commentaite' => $commentaite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentaiteRequest  $request
     * @param  \App\Models\Commentaite  $commentaite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentaiteRequest $request, Commentaite $commentaite)
    {
        $data = $request->all();
        dd($request->file());
        $commentaite = $commentaite->fill($data);
        $commentaite->save();
        return redirect()->route('commentaite.edit', $commentaite);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaite  $commentaite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaite $commentaite)
    {
        //
    }
}
