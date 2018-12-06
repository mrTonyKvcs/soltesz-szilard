<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    /**
     * fillable
     *
     * @var mixed
     */
    protected $fillable = [
        'title', 'slug', 'description', 'locale' , 'image_path', 'price', 'max_person'
    ];

    /**
     * dates
     *
     * @var mixed
     */
    protected $dates = [
        'deleted_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * dates
     *
     */
    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
