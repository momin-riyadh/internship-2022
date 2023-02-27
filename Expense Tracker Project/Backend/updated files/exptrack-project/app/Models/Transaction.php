<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

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
