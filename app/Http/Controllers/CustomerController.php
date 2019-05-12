<?php

namespace App\Http\Controllers;
use App\Transaction;
use Auth;
use App\Cart;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function dashboard()
    {
    	$transactions=Transaction::where('user_id',Auth::user()->id)->get();
    

    	return view('customer.dashboard',compact('transactions'));
    }

    public function cart()
    {
    	$carts=Cart::where('user_id',Auth::user()->id)->get();
    	$total=0;
    	foreach ($carts as $key => $value) {
    		
    		$total=$total+$value->product->amount;
    	}
    	return view('customer.cart',compact('carts','total'));
    }

    public function profile()
    {	
    	$user=Auth::user();
    	return view('customer.profile',compact('user'));
    }

    public function updateProfile(Request $request)
    {
    	//return $request->all();
    	$user=User::find(Auth::user()->id);

    	$user->update($request->except('password','_token'));

    	return back()->with(['status'=>'your profile has been updated successfully!']);
    }
}
