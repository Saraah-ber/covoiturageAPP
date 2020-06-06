<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Assurance extends Model
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
  protected $table = 'assurances';

  /**
  * Get the route key for the model.
  *
  * @return string
  */
  public function getRouteKeyName()
  {
      return 'police';
  }

  /**
  * Get the category's name.
  *
  * @param  string  $value
  * @return string
  */
  public function getPoliceAttribute($value)
  {
    return Str::upper($value);
  }

  /**
     * Get the vehicule that owns the assurance.
     */
    public function vehicule()
    {
        return $this->hasOne(Vehicule::class);
    }

  /**
  * Get the typeAssurance for the assurances.
  */
  public function TypeAssurance()
  {
    return $this->belongsTo(TypeAssurance::class);
  }

}
