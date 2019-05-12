<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable=['name','category_id','user_id','amount','description','long_description','type'];

    public function category()
    {
    	return $this->belongsTo('App\Category');

    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function faq()
    {
        return $this->hasMany('App\Faq');
    }

    public function setThumbnailsAttribute($value)
    {
      $this->attributes['thumbnails']=json_encode($value);
    }
    public function getThumbnailsAttribute($value)
    {
        return json_decode($value,1);
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
