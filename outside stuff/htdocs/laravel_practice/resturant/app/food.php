<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = 'fooditem';
    public $timestamps = true;
   
   protected $fillable = [
      'category', 'food','image', 'price',
  ];
}
