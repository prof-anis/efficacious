<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //latest product 
        $goods=Product::where('type','goods')->orderBy('id','DESC')->limit(6)->get();
        //latest services
        $services=Product::where('type','services')->orderBy('id','DESC')->limit(6)->get();

        //categories
        $categories=Category::all();
        return view('main.index',compact('goods','services','categories'));
    }


}
