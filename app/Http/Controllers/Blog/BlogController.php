<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\BlogCategory;

class BlogController extends Controller
{
	public function index()
	{
		$blogs=Blog::paginate(5);
		$latest=$this->latestPost();
		$popular=$this->popularPost();
		$cats=BlogCategory::all();
		return view('blog.index',compact('blogs','latest','popular','cats'));
	}

	public function latestPost()
	{
		return Blog::limit(7)->orderBy('id','DESC')->get();
	}

	public function popularPost()
	{
		return Blog::limit(7)->get();
	}
    //

    public function show($id)
    {
    	$post=Blog::findOrFail($id);
    	$latest=$this->latestPost();
		$popular=$this->popularPost();
		$cats=BlogCategory::all();


    	return view('blog.show',compact('post','latest','popular','cats'));
    }
}
