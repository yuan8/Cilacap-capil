<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provinsi;
use App\kabupaten;
use App\kecamatan;
use App\Desa;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kecamatan($kabupaten)
    {
        return kecamatan::where('kota_kabupaten_id',$kabupaten)->get();
    }

     public function desa($kecamatan)
    {
        return Desa::where('kecamatan_id',$kecamatan)->get();
    }

     public function kabupaten($provinsi)
    {
        return kabupaten::where('provinsi_id',$provinsi)->get();
    }
    

    
}
