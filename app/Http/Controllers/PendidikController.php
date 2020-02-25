<?php

namespace App\Http\Controllers;

use App\Pendidik;
use Illuminate\Http\Request;
use App\Provinsi;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('form.create_pendidik', compact('provinsi'));
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
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidik $pendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidik $pendidik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidik $pendidik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidik $pendidik)
    {
        //
    }
}
