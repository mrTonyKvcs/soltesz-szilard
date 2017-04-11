<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'slug', 'description', 'images_path', 'video_path', 'started_at', 'expired_at'
    ];
    protected $date = [
        'started_at', 'expired_at', 'deleted_at'
    ];
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
