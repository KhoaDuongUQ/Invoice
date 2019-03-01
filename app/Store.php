<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * Get the user that owns the store.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the items of a store
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * Get the store's image.
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'description','user_id',
    ];
}
