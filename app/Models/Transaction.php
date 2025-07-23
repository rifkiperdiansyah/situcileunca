<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tiket_id',
        'name_customer',
        'no_phone',
        'date_transaction',
        'amount',
        'data_payment',
        'quantity',
        'type',
    ];

    public function ticket()
    {
        return $this->belongsTo(\App\Models\Tiket::class, 'ticket_id');
    }
}
