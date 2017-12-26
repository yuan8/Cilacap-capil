<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kabupaten;
use App\Desa;
use App\Kecamatan;
use App\Ktp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Provinsi $kabupaten)
    {
        
        $total_capil=Ktp::count();
        return view('pages.home')->with('target',$kabupaten::all())->with('total_capil',$total_capil);
    }
}
