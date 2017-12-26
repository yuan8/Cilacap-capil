<?php

namespace App\Http\Controllers;

use App\Ktp;
use Illuminate\Http\Request;
use App\Desa;
use App\Religion;
use App\StatusMerital;
use App\Blood;
use App\Citizenship;
use App\Sex;
use App\Kabupaten;
use App\Provinsi;
use Auth;

use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ktp=Ktp::all();
        return view('pages.ktp')->with('ktps',$ktp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        $desa=Provinsi::all();
        return view('pages.create_ktp')
        ->with('provinsi',$desa)
        ->with('place_birth',Kabupaten::all())
        ->with('agama',Religion::all())
        ->with('warga_negara',Citizenship::all())
        ->with('blood',Blood::all())
        ->with('sex',Sex::all())
        ->with('merital',StatusMerital::all());





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
        
        $path=null;
        if($request->file('ktp_picture')){

            $path = $request->file('ktp_picture')->storeAs('/public/ktp', Auth::user()->id.'-'.rand(1,100000000).'.jpg');
            $path=Storage::url($path);

        }
    

        Ktp::create(
            [
                'no_ktp'=>$request->no_ktp,
                'name'=>$request->name,
                'status_merital_id'=>$request->status_merital_id,
                'desa_kelurahan_id'=>$request->desa_kelurahan_id,
                'birthday'=>$request->birthday,
                'birthday_location_id'=>$request->birthday_location_id,
                'religion_id'=>$request->religion_id,
                'blood_type_id'=>$request->blood_type_id,
                'work_status'=>$request->work_status,
                'sex'=>$request->sex,
                'citizenship_id'=>$request->citizenship_id,
                'ktp_picture'=>$path

            ]
        );



        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function show(Ktp $ktp)
    {
        //
        return view('pages.show_ktp')->with('data',$ktp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function edit(Ktp $ktp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ktp $ktp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ktp $ktp)
    {
        //
    }
}
