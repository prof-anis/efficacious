<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

    public function whoReviewed()
    {
    	return $this->belongsTo('App\User');
    }
}
