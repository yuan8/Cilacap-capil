<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kabupaten;
use App\Desa;
class Kecamatan extends Model
{
    //

    protected $table='kecamatan';


     protected $fillable=[
     	'id',
     	'id_formated',
     	'nama',
     	'deskripsi',
     	'kota_kabupaten_id',
     	'usi',
     	'usu'
     ];


     public function fromKabupaten(){
     	return $this->belongsTo(Kabupaten::class,'kota_kabupaten_id');
     }

    public function hasDesa(){
     	return $this->hasMany(Desa::class,'kecamatan_id');
     }

}
