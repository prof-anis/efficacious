<?php

namespace App\Http\Controllers\Api;
use App\User;
use Auth;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    //

    public function getCat($type)
    {
    	$cat=Category::where('type',$type)->get();
    	return response()->json([

    		"code"=>200,
    		"message"=>'OK',
    		"data"=>$cat

    	]);
    }
}
