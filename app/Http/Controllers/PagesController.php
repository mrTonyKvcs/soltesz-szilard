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

        $themes = [
            [
                'title' => trans('navbar.communication-techniques'),
                'url'   => 'topics.communication-techniques'
            ],
            [
                'title' => trans('navbar.developing-competencies'),
                'url'   => 'topics.developing-competencies'
            ],
            [
                'title' => trans('navbar.stress-sticking'),
                'url'   => 'topics.stress-sticking'
            ],
            [
                'title' => trans('navbar.life-crises'),
                'url'   => 'topics.life-crises'
            ],
            [
                'title' => trans('navbar.resilience'),
                'url'   => 'topics.resilience'
            ]
        ];
        $theme = collect($themes)->random();

    	return view('pages.home', compact('training', 'blog', 'theme'));
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
