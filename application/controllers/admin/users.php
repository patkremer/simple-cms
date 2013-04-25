<?php

class Admin_Users_Controller extends Admin_Controller {

	public $restful = true;    
	
    // Display list of users
    public function get_index()
    {
        return View::make('admin.users.index')
            ->with('title', 'Registered Users')
            ->with('users', User::order_by('id','asc')->get());
    }    

    public function get_show($id)
    {
        return View::make('admin.users.show')
            ->with('title', 'User View Page')
            ->with('user', User::find($id));
    }

     public function get_new()
    {
        return View::make('admin.users.new')
            ->with('title', 'Add new User');
    }    

	public function post_create()
    {
        $validation = User::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to_route('admin/new_user')
                ->with_errors($validation)->with_input();
        } else {
            User::create(array(
                'name' => Input::get('name'),
                'username' => Input::get('username'),
                'email' => Input::get('email'),
                'bio' => Input::get('bio'),
                'password' => Hash::make(Input::get('password'))
            ));
            return Redirect::to_route('admin/users')
                ->with('message', 'The user was created successfully!');
        }
    }    

    public function get_edit($id)
    {
        return View::make('admin.users.edit')
            ->with('title', 'Edit User')
            ->with('user', User::find($id));       
    }    

	public function put_update()
    {
        $id = Input::get('id');
        $validation = User::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to_route('admin/edit_user', $id)
                ->with_errors($validation);
        } else {
            $user = User::find($id);
            $user->name = Input::get('name');
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->bio = Input::get('bio');
            if (Input::get('password')) {
                $user->password = Hash::make(Input::get('password'));
            }
            
            $user->save(); 

            return Redirect::to_route('admin/user', $id)
                ->with('message', 'User updated successfully!');
        }
    }    

    public function delete_destroy()
    {
        User::find(Input::get('id'))->delete();
        return Redirect::to_route('admin/users')
            ->with('message', 'The user was deleted successfully!');
    }    
}