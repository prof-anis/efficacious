<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password','last_name','address','country','city','postal_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function seller()
    {
        return $this->hasOne('App\Seller');
    }
    public function productReviewed()
    {
        return $this->hasMany('App\Faq');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

     public function cart()
    {
        return $this->hasMany('App\Cart');
    }

    public function reaction()
    {
        return $this->hasMany('App\Reaction');
    }


}
