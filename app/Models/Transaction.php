<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'user_id', 'external_id', 'qty', 'name_buyer', 'email', 'phone_number', 'amount', 'status_transaction', 'expired_date_transaction', 'data_payment_gateway','date_ticket','invoice_url'];
    
    public function ticket()
    {
        return $this->belongsTo(\App\Models\Tiket::class, 'ticket_id');
    }
}