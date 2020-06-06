<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
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
  protected $table = 'trajets';

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyTypeId()
  {
      return 'type_id';
  }

  /**
  * Get the type for the trajet.
  */
  public function type()
  {
    return $this->belongsTo(Type::class);
  }

}
