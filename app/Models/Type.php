<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Type extends Model
{
    /**
  * The attributes that aren't mass assignable.
  *
  * @var array
  */
  protected $guarded = [];

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'types';

  /**
  * Get the category's name.
  *
  * @param  string  $value
  * @return string
  */
  public function getNameAttribute($value)
  {
    return Str::ucfirst($value);
  }

  /**
  * Get the trajets for the type .
  */
  public function trajets()
  {
    return $this->hasMany(Trajet::class);
  }
}
