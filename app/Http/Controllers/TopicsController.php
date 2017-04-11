<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function communicationTechniques()
    {
    	return view('topics.communication-techniques');
    }
    public function developingCompetencies()
    {
    	return view('topics.developing-competencies');
    }
    public function stressSticking()
    {
    	return view('topics.stress-sticking');
    }
    public function lifeCrises()
    {
    	return view('topics.life-crises');
    }
    public function resilience()
    {
        return view('topics.resilience');
    }
}
