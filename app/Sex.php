<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ktp;
class Sex extends Model
{
    //

     protected $table='sexs';


      protected $fillable=[
    	'id',
    	'content'
    ];

     public function hasKtp(){
     	return $this->hasMany(Ktp::class,'sex');
     }

}
