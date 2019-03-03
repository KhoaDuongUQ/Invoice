<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * Get the stores of a user
     */
    public function stores()
    {
        return $this->hasMany('App\Store');
    }

    /**
     * Get the items of a user
     */
    public function items()
    {
        return $this->hasManyThrough('App\Item', 'App\Store');
    }

    /**
     * Get the customers of a user
     */
    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    /**
     * Get the orders of a user
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * Get the user's image.
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
