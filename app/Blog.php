<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;
    protected $fillable = [
        'title', 'slug', 'description', 'images_path', 'video_path', 'expired_at'
    ];
    protected $date = [
	    'expired_at', 'deleted_at'
    ];
}
