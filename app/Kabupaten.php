<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kecamatan;
use App\Provinsi;
use App\Ktp;
class Kabupaten extends Model
{
    //

     protected $table='kota_kabupaten';


     protected $fillable=[
     	'id',
     	'id_formated',
     	'nama',
     	'deskripsi',
     	'provisi_id',
     	'usi',
     	'usu'
     ];


     public function hasKecamatan(){
     	return $this->hasMany(Kecamatan::class,'kota_kabupaten_id');
     }

     public function hasKtp(){
     	return $this->hasMany(Ktp::class,'birthday_location_id');
     }

      public function fromProvinsi(){
     	return $this->belongsTo(Provinsi::class,'provinsi_id');
     }
     public function kecamatan_relation(){
          return $this->hasKecamatan();
     } 

}
