<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function cat()
    {
    	return $this->belongsTo('App\BlogCategory');
    }
}
