<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
   protected $table = "modelUser";

   public $timestamps = true;
   
   protected $fillable = [
      'name', 'email', 'address', 'password',
  ];

}
