<?php

namespace App\Http\Controllers;

use App\Date;
use App\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function index()
    {
    	$today = Carbon::now('Europe/London')->format('Y-m-d');

        $dates = Date::where('started_at', '>=', $today)->orderBy('started_at')->get();

    	return view('trainings.index', compact('dates', 'today'));
    }

    public function show(Training $training)
    {
    	return view('trainings.show', compact('training'));
    }
}
