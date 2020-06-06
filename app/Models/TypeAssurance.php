<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAssurance extends Model
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
  protected $table = 'type_assurances';

  /**
  * Get the category's name.
  *
  * @param  string  $value
  * @return string
  */
  public function getNameAttribute($value)
  {
    return Str::upper($value);
  }

  public function assurances()
  {
    return $this->hasMany(Assurance::class);
  }

}
