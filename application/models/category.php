<?php

class Category extends Eloquent 
{
	public static $timestamps = false;

	public static $rules = array('name' => 'required');

	public function posts()
	{
	    return $this->has_many('Post');
	}

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
}