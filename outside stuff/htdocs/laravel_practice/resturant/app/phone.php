<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $table = 'phones';

    public $timestamps = true;
   
    protected $fillable = [
       'user_id','phone',
   ];

}
