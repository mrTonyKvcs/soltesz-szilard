<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }
    public function motivation()
    {
        return view('pages.motivation');
    }
    public function about()
    {
        return view('pages.about');
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
