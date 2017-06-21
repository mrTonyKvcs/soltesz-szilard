<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'slug', 'description', 'images_path', 'video_path', 'started_at', 'expired_at'
    ];
    protected $dates = [
        'started_at', 'expired_at', 'deleted_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
