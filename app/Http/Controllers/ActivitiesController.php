<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function selflessCoaching()
    {
    	return view('activities.selfless-coaching');
    }
     public function guidance()
    {
    	return view('activities.guidance');
    }
    public function groupTrainings()
    {
    	return view('activities.group-trainings');
    }
}
