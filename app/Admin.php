<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{

	protected $fillable = ['name' , 'email','password','image' , 'phone','address' ];
   // protected $gaurded = ['created_at','updated_at'] ;
}
