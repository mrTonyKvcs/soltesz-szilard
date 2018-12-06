<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'img_path', 'expired_at'
    ];
    protected $date = [
	    'deleted_at'
    ];
}
