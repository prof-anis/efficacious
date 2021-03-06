<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\User;
use App\Seller;
use App\Category;
use App\Transaction;
class SellerController extends Controller
{
    //
    public function products()
    {
    	$products=Product::where('user_id',Auth::user()->id)->paginate();

    	return view('seller.products',compact('products'));
    }

    public function  addBusiness(Request $request)
    {
    	$data=$request->only('business_name','address','phone','description');
    	$data['user_id']=Auth::user()->id;

    	$data=Seller::create($data);

    	return response()->json([
    		"data"=>$data,
    		"message"=>'OK',
    		"code"=>201

    	]);
    }

    public function showAddProduct()
    {
    	$cats=Category::all();
    
    	return view('seller.addproduct',compact('cats'));
    }

    public function addProduct(Request $request)
    {
    	



    	Product::create([
    		"name"=>$request->name,
    		"category_id"=>$request->category,
    		"long_description"=>$request->all()['trumbowyg-demo'],
    		"description"=>$request->description,
    		"amount"=>($request->price_end == null) ? $request->price_start : $request->price_start."-".$request->price_end,
    		"user_id"=>Auth::user()->id,
    		"type"=>$request->type

    	]);

    	return redirect()->route('seller.product')->with(['status'=>'item successfully added']);
    }

  public function showEditProduct($id)
  {
  	$product=Product::find($id);
  	$cats=Category::all();

  	return  view('seller.editproduct',compact('product','cats'));
  }

  public function  updateProduct(Request $request,$id)
  {
  	$product=Product::findOrFail($id);
  	$data=$request->except('_token','image_url','thumbnails');
  	$product->update($data);

  	return back()->with(['status'=>'Product successfully updated']);

  }

  public function orders()
  //get seller products
  
  {	
  	$products_id=Product::where('user_id',Auth::user()->id)->pluck('id');

  	$transactions=Transaction::whereIn('product_id',$products_id)->paginate();

  	return view('seller.orders',compact('transactions'));
  }



}
