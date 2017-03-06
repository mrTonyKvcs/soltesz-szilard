<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function getDate($date)
    {
    	$date = Carbon::parse($date)->format('Y-M-d');
    	return $date;
    }
}
