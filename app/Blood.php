<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    //

    protected $table='blood_types';

    protected $fillable=[
    	'id',
    	'content'
    ];

      public function hasKtp(){
     	return $this->hasMany(Ktp::class,'bood_type_id');
     }
}
