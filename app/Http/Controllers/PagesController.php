<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Training;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $training = Training::orderBy('started_at')->firstOrFail();
        $blog = Blog::orderBy('created_at')->first();

    	return view('pages.home', compact('training', 'blog'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function selflessCoaching()
    {
        return view('pages.selfless-coaching');
    }
    public function price()
    {
    	return view('pages.price');
    }
    public function contact()
    {
    	return view('pages.contact');
    }
}
