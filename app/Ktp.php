<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Desa;
use App\Kabupaten;
use App\StatusMerital;
use App\Blood;
use App\Citizenship;
use App\Religion;


class Ktp extends Model
{
    //

    protected $fillable=[
    	'id',
    	'no_ktp',
    	'name',
    	'status_merital_id',
    	'desa_kelurahan_id',
    	'birthday',
    	'birthday_location_id',
    	'religion_id',
    	'blood_type_id',
        'sex',
    	'work_status',
    	'citizenship_id',
    	'ktp_picture'
    ];


      public function fromDesa(){
     	return $this->belongsTo(Desa::class,'desa_kelurahan_id');
     }

      public function birthLocation(){
     	return $this->belongsTo(Kabupaten::class,'birthday_location_id');
     }

      public function fromBlood(){
     	return $this->belongsTo(Kabupaten::class,'blood_type_id');
     }
     public function fromCitizenship(){
     	return $this->belongsTo(Citizenship::class,'citizenship_id');
     }

     public function fromStatusMerital(){
     	return $this->belongsTo(StatusMerital::class,'status_merital_id');
     }

      public function fromReligion(){
     	return $this->belongsTo(Religion::class,'religion_id');
     }



}
