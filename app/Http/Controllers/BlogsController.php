<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
	public function index()
	{
		$blogs = Blog::orderBy('published_at', 'desc')->get();
		return view('blog.index', compact('blogs'));
	}
	public function show($slug)
	{
		$blog = Blog::where('slug', $slug)->firstOrFail();
		return view('blog.show', compact('blog'));
	}    
}
