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
    protected $fillable = [ 'training_id', 'started_at', 'expired_at' ];

    /**
     * dates
     *
     * @var mixed
     */
    protected $dates = [
        'started_at', 'expired_at', 'deleted_at'
    ];

    /**
     * training
     *
     */
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
