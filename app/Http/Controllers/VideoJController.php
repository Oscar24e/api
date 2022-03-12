<?php

namespace App\Http\Controllers;

use App\Models\videogames;
use Illuminate\Http\Request;


class VideoJController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return videogames::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoJ  $videoJ
     * @return \Illuminate\Http\Response
     */
    public function show(videogames $videoJ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videogames $videoJ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videogames  $videogames
     * @return \Illuminate\Http\Response
     */
    public function destroy(videogames $videoJ)
    {
        //
    }
}

