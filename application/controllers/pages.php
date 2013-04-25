<?php

class Pages_Controller extends Base_Controller {    

	public function action_blog()
    {
    	$posts = Post::order_by('created_at', 'desc')->get();
        return View::make('pages.blog')->with('posts', $posts);
    }    

    public function action_view($id)
    {
        $post = Post::with('user')->where_id($id)->first();
        return View::make('pages.post')->with('post', $post);      
    }    

    public function action_category($id)
    {
        $posts = Post::where('category_id', '=', $id)->order_by('created_at', 'desc')->get();
        return View::make('pages.blog')->with('posts', $posts);
    }

}