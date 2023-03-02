<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';

    public $timestamps = true;
   
   protected $fillable = [
      'name', 'email','password',
  ];
}
