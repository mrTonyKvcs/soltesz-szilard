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

    $trainingsWithDates = Training::whereHas('dates', function ($q) use ($today) {
      $q
        ->where('started_at', '>=', $today)
        ->orderBy('started_at', 'desc');
    });

    $trainingsWithoutDates = Training::whereDoesntHave('dates');

    $trainings = $trainingsWithoutDates->union($trainingsWithDates)->get();

    return view('trainings.index', compact('today', 'trainings'));
  }

  public function show($id)
  {
    $training = Training::find($id);

    return view('trainings.show', compact('training'));
  }
}
