<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
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
  protected $table = 'members';

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName()
  {
      return 'firstname';
  }

  public $timestamps = true;

  /**
  * Get the category for the members.
  */
  public function category()
  {
    return $this->belongsTo(category::class);
  }

  /**
  * Get the user for the members.
  */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
