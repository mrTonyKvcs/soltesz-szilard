<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function getYear($date)
    {
    	$date = Carbon::parse($date)->format('Y-M-d');
    	$date = explode('-', $date);
    	return $date[0];
    }
    public function getMonth($date)
    {
    	$date = Carbon::parse($date)->format('Y-M-d');
    	$date = explode('-', $date);
    	return $date[1];
    }
    public function getDay($date)
    {
    	$date = Carbon::parse($date)->format('Y-M-d');
    	$date = explode('-', $date);
    	return $date[2];
    }
}
