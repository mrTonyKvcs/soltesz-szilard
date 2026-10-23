<?php

namespace App;

use App\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Date extends Model
{
    use SoftDeletes;

    /**
     * fillable
     *
     * @var string
     */
    protected $fillable = [ 'training_id', 'started_at', 'hour'];

    /**
     * dates
     *
     * @var mixed
     */
    protected $casts = ['started_at' => 'date', 'deleted_at' => 'datetime'];

    /**
     * training
     *
     */
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
