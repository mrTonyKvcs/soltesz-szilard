<?php

namespace App;

use App\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use SoftDeletes;

    /**
     * fillable
     *
     * @var string
     */
    protected $fillable = [ 'training_id', 'name', 'email', 'phone_number', 'description', 'about_me' ];

    /**
     * dates
     *
     * @var mixed
     */
    protected $dates = [
        'deleted_at'
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
