<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
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
        return $this->belongsTo(AccountHead::class, 'acc-head', 'head_code');
    }
}
