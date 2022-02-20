<?php

namespace App\Http\Controllers;

use App\Models\pokemon;
use App\Http\Requests\StorepokemonRequest;
use App\Http\Requests\UpdatepokemonRequest;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorepokemonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepokemonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepokemonRequest  $request
     * @param  \App\Models\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepokemonRequest $request, pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(pokemon $pokemon)
    {
        //
    }
}
