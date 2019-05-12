<?php

namespace App\Http\Controllers;

use App\Reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function toggleReaction($product_id)
    {
        $curr=Reaction::where('user_id',Auth::user()->id)
                        ->where('product_id',$product_id)
                        ->get();
    }
}
