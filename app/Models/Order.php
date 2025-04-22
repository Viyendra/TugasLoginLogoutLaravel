<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'buyer_name',
        'ticket_id',
        'quantity',
        'total_price',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}

