<?php

class Post extends Eloquent 
{
	public static $timestamps = true;
	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'body' => 'required'
	);

	

	public function user()
	{
	    return $this->belongs_to('User', 'user_id');
	}

	public function category()
	{
	    return $this->belongs_to('Category', 'category_id');
	}

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
	
	
}