<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kecamatan;
use App\Ktp;

class Desa extends Model
{
    //
    protected $table='desa_kelurahan';


     protected $fillable=[
     	'id',
     	'id_formated',
     	'nama',
     	'deskripsi',
     	'kecamatan_id',
     	'usi',
     	'usu',
     ];

     public function fromKecamatan(){
     	return $this->belongsTo(Kecamatan::class,'kecamatan_id');
     }

      public function hasKtp(){
     	return $this->hasMany(Ktp::class,'desa_kelurahan_id');
     }




}
