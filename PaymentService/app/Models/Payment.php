<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'amount',
        'payment_method',
        'status',
        'transaction_id'
    ];

    // Relasi ke Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
