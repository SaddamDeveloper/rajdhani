<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['buyer_name', 'buyer_phone', 'buyer_email', 'payment_id', 'buy_status', 'amount', 'quantity', 'unit_price', 'fees', 'instrument_type', 'status', 'payment_at', 'payment_request_at', 'payment_request_id'];
}
