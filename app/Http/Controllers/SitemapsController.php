<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapsController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->toW3cString();

        $blogs = Blog::all();

        $trainings = Training::all();

        return response(view('sitemaps.index', compact('now', 'blogs', 'training')))->header('Content-Type', 'application/xml');
    }
}
