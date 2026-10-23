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
  protected $fillable = ['training_id', 'name', 'email', 'phone_number', 'description'];

  /**
   * dates
   *
   * @var mixed
   */
  protected $casts = ['deleted_at' => 'datetime'];

  /**
   * training
   *
   */
  public function training()
  {
    return $this->belongsTo(Training::class);
  }
}
