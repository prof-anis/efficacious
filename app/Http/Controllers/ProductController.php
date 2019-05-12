<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use App\Category;
use Auth;
use App\Transaction;
use App\User;
use App\Cart;
use Route;
class ProductController extends Controller
{
    //

    public function show($id)
    {
    	$product=Product::findOrFail($id);
    	$reviews=Review::where('product_id',$id)->simplePaginate(5);
    	$otherCategoryProducts=Product::where('category_id',$product->category_id)->limit(3)->get();
    	return view('product.show',compact('product','reviews','otherCategoryProducts'));
    }



    public function index($type=null)
    {
    	if($type == "goods")
    	{
    		$products=Product::where('type','goods')->paginate(10);
    		$categories=Category::where('type','goods')->get();
    	}
    	elseif ($type == "services") {
    		$products=Product::where('type','services')->paginate(10);
    		$categories=Category::where('type','services')->get();
    	}
    	else{
    		$products=Product::paginate(10);
    		$categories=Category::all();
    	}
    	
    	return view('product.index',compact('products','categories'));
    }



    public function showByCat($cat_id)
    {
    	$cat=Category::findOrFail($cat_id);
    	$products=$cat->product()->paginate(10);
    	$categories=Category::paginate();
    	return view('product.index',compact('products','categories'));
    }



    public function search(Request $request)
    {	$search=$request->get('search');

    	if($request->cat_id != null)
    	{
    		$products=Product::where('name','like',"%{$search}%")
    							->where('category_id',$request->cat_id)
    					//	->orWhere('description','like',"%$search%")
    						->paginate(10);

    	}
    	else{
    		$products=Product::where('name','like',"%{$search}%")
    					//	->orWhere('description','like',"%$search%")
    						->paginate(10);

    	}
    	

    	$categories=Category::all();
    	return view('product.index',compact('products','categories'));
    }


    public function checkout($product_id=null)
    {	
    	//if the method is called from cart, retrieve the products in the cart
    	if(Route::currentRouteName() == 'cart.checkout'){

    		$products_id=Cart::where('user_id',Auth::user()->id)->pluck('product_id');

    		$products=Product::whereIn('id',$products_id)->get();
    		
    	}
    	else{

    		$products=Product::where('id',$product_id)->get();
    		
    	}
    	
    	$productId=[];
    	$total=0;
   
    	foreach ($products as $key => $value) {
    		$total=$total+intval($value['amount']);
    		$productId[]=$value['id'];
    	}

    	$productId=json_encode($productId);


    	return view('product.checkout',compact('products','total','productId'));
    }

    public function storeCheckoutRequest(Request $request)
    {	
    	$user=User::where('email',$request->email)->first();

    

    	//update the transaction table
    	$products=json_decode($request->productId,1);



    	foreach ($products as $key => $product_id) {

	    	$transaction=Transaction::create([
	    		"user_id"=>$user->id,
	    		"product_id"=>$product_id,
	    		"status"=>"pending",
	    		"reference"=>sha1(microtime())
	    		]);

	   Cart::where([
	   	['user_id','=',Auth::user()->id],
	   	['product_id','=',$product_id]
	   ])->delete();

	    	}
	    //remove the details from the cart



	   return redirect()->route('customer.dashboard')->with(['status'=>'transaction completed successfully, product would be delivered in five working days']);
    	
    }

    public function addToCart(Request $request)
    {	
    	if(Cart::where('user_id',Auth::user()->id)->where('product_id',$request->product_id)->first() != null)
    	{
    		return back()->with(['status'=>'item already added to cart']);
    	}
    	$cart=Cart::create([
    		"user_id"=>Auth::user()->id,
    		"product_id"=>$request->product_id
    	]);

    	return back()->with(['status'=>'cart has been updated.']);
    }

    public function removeFromCart(Request $request)
    {
    	$cart=Cart::findOrFail($request->cartId)->delete();

    	return back()->with(['status'=>'item removed from cart']);
    }


}
