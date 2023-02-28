<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AccountHead extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'head_code',
        'title',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'acc_head');
    }
}
