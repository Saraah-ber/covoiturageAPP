<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
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
	protected $table = 'categories';

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
	* Get the members for the category .
	*/
	public function members()
	{
		return $this->hasMany(Member::class);
	}

}
