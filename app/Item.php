<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Get the store that owns the item.
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    /**
     * Get the item's image.
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * Get the orderItems of a items
     */
    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','price', 'store_id'
    ];
}
