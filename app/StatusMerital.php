<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ktp;
class StatusMerital extends Model
{
    //
     protected $fillable=[
    	'id',
    	'content'
    ];

     public function hasKtp(){
     	return $this->hasMany(Ktp::class,'status_merital_id');
     }
}
