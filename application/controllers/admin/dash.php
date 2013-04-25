<?php

class Admin_Dash_Controller extends Admin_Controller 
{
	public $restful = true;

	// Create User login functionality 
	public function get_index()
	{
		return View::make('admin.index')->with('title', 'Blog Manager');
	}
	
	// Login functions
	public function get_login()
	{	
		return View::make('admin.login')->with('title', 'Login');
	}
	
	public function get_logout()
	{	
		Auth::logout();
		return Redirect::to('admin');
	}

	public function post_login()	
	{
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if ( Auth::attempt($credentials) ) {
			return Redirect::to('admin');
		}else{
			return Redirect::to('admin/login');
		}


	}
}