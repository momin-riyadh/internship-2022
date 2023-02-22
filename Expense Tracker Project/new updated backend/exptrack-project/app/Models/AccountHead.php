<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHead extends Model
{
    use HasFactory;

    protected $fillable = [
        'head_code',
        'title',
        'debit',
        'credit'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'acc_head');
    }
}
