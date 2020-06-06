<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Vehicule extends Model
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
  protected $table = 'vehicules';

  /**
    * Get the route key for the model.
    *
    * @return string
    */
    public function getRouteKeyName()
    {
        return 'brand';
    }

  /**
  * Get the category's name.
  *
  * @param  string  $value
  * @return string
  */
  public function getBrandAttribute($value)
  {
    return Str::ucfirst($value);
  }

    /**
     * Get the assurance record associated with the vehicule.
     */
    public function assurance()
    {
        return $this->belongsTo(Assurance::class);
    }
}
