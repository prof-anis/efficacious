<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //

    protected $fillable=['business_name','phone','address','description','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
