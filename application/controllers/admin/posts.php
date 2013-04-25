<?php

class Admin_Posts_Controller extends Admin_Controller {

	public $restful = true;    

	public function get_index()
    {
        $posts = Post::with('user')->order_by('created_at', 'desc')->get();
        return View::make('admin.posts.index')
            ->with('title', 'Blog Posts')
            ->with('posts', $posts);
    }    

	public function get_new()
    {
        $categories = Category::order_by('name', 'asc')->get();
        return View::make('admin.posts.new')
            ->with('title', 'Create new blog post')
            ->with('categories', $categories);
    }    

    public function post_create()
    {
        $validation = Post::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to_route('admin/new_post')
                ->with_errors($validation)
                ->with_input();
        } else {
            // Insert post into DB with the logged-in user as the creator Auth::user->id
            Post::create(array(
                'category_id' => Input::get('category'),
                'title' => Input::get('title'),
                'url_title' => Str::slug(Input::get('title')),
                'description' => Input::get('description'),
                'body' => Input::get('body'),
                'user_id' => Auth::user()->id
            ));
            return Redirect::to_route('admin/posts')
                ->with('message', 'The post was successfully created!');
        }   
    }    

	public function get_show($id)
    {
        return View::make('admin.posts.show')
            ->with('title', 'View blog post')
            ->with('post', Post::find($id));
    }    

	public function get_edit($id)
    {
        return View::make('admin.posts.edit')
            ->with('title', 'Edit Blog Post')
            ->with('post', Post::find($id));
    }    

	public function put_update()
    {
        $id = Input::get('id');
        $validation = Post::validate(Input::all());
      
        if ( $validation->fails() ) {
            return Redirect::to_route('admin/edit_post')
                ->with_errors($validation)
                ->with_input();
        } else {
            Post::update($id, array(
                'category_id' => Input::get('category'),
                'title' => Input::get('title'),
                'url_title' => Str::slug(Input::get('title')),
                'description' => Input::get('description'),
                'body' => Input::get('body'),
                'user_id' => Auth::user()->id
            ));
            return Redirect::to_route('admin/posts')
                ->with('message', 'The post was updated successfully!');
        }
    }    

	public function delete_destroy()
    {
        Post::find(Input::get('id'))->delete();
        return Redirect::to_route('admin/posts')
            ->with('message', 'Post was successfully deleted!');
    }

}