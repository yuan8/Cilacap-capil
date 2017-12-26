<?php

namespace App\Http\Controllers;

use App\Provinsi;
use Illuminate\Http\Request;
use App\Kabupaten;
class ProvinsiController extends Controller
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
     * @param  \App\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show(Provinsi $provinsi)
    {
        //

        $kabupaten=Kabupaten::where('provinsi_id',$provinsi->id)->get();

        return view('pages.provinsi')->with('target',$kabupaten)->with('target_objek',$provinsi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit(Provinsi $provinsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provinsi $provinsi)
    {
        //
    }
}
