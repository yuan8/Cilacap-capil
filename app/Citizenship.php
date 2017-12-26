<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ktp;
class Citizenship extends Model
{
    //


    protected $fillable=[
    	'id',
    	'content'
    ];


     public function hasKtp(){
     	return $this->hasMany(Ktp::class,'citizenship_id');
     }
}
