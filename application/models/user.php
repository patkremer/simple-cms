<?php

class User extends Eloquent 
{
	public static $timestamps = true;
	
	public static $rules = array(
		'name' => 'required|min:5',
		'email' => 'required|email',
		'username' => 'required|unique:users,id',
		'password' => 'confirmed'		
	);

	public function posts()
	{
	    return $this->has_many('Post');
	}

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
}