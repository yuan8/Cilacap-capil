<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kabupaten;
class Provinsi extends Model
{
    //

     protected $table='provinsi';


     protected $fillable=[
     	'id',
     	'id_formated',
     	'nama',
     	'deskripsi',
     	'usi',
     	'usu'
     ];

   
      public function hasKabupaten(){
     	return $this->hasMany(Kabupaten::class,'provinsi_id');
     }

     public function KtpCount(){
        return $this->hasManyThrough('hasKabupaten','hasKabupaten.hasKecamatan');
     }
}
