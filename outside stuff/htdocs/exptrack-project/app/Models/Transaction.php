<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Transaction extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'acc_head',
        'voucher_no',
        'voucher_id',
        'narration',
        'debit',
        'credit'

    ];

    protected $casts = [
        'is_opening' => 'boolean',
        'transaction_at' => 'datetime'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accountHead()
    {
        return $this->belongsTo(AccountHead::class, 'acc_head', 'head_code');
    }

}
