<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the store of the image
     */
    public function store()
    {
        return $this->morphTo('App\Store', 'imageable');
    }

    /**
     * Get the item of the image
     */
    public function item()
    {
        return $this->morphTo('App\Item', 'imageable');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'imageable_id', 'imageable_type'
    ];
}
