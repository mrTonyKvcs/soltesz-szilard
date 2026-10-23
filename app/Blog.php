<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'img_path', 'published_at'
    ];
    protected $casts = ['deleted_at' => 'datetime'];
}
