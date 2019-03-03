<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * Get the order that owns the orderItems.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * Get the item that owns the orderItems.
     */
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
