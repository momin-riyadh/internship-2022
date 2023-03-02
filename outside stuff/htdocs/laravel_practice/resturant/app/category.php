<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    public $timestamps = true;
   
    protected $fillable = [
       'category',
   ];
}
