<?php

class Admin_Controller extends Base_Controller {

	public function __construct() 
    {
        // Make sure this function runs before anything else
        // Prevent anyone without authorized access to reach the admin dash
        $this->filter('before', 'auth')->except(array('login', 'setup'));
    }

    public function auth() 
    {
        if (Auth::guest()) return Redirect::to('admin/login');
    }

}