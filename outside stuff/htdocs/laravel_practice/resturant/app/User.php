<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function phone()
    {
        return $this->hasOne(phone::class);
    }

    public function phones()
    {
        return $this->hasMany(phone::class);
    }
}
