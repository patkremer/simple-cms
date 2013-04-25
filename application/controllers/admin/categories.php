<?php

class Admin_Categories_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $categories = Category::order_by('id', 'asc')->get();
        return View::make('admin.category.index')
            ->with('title', 'Categories')
            ->with('categories', $categories);
    }    

	public function get_new()
    {
        return View::make('admin.category.new')->with('title', 'Create a new Category');
    } 

    public function post_create()
    {
        $validation = Category::validate(Input::all());

        if($validation->fails()) 
        {
            return Redirect::to_route('admin/new_category')
                ->with_errors($validation)->with_input();
        } else {
            $category = new Category;
            $category->name = Input::get('name');
            $category->url_name = Str::slug(Input::get('name'), '-'); 
            if(Input::get('description')) {
                $category->description = Input::get('description');
            }
            $category->save();
        }
        return Redirect::to_route('admin/categories')->with('message', 'Category was successfully created!');
    }    


	public function get_edit($id)
    {
        return View::make('admin.category.edit')
            ->with('title', 'Edit Category')
            ->with('category', Category::find($id));
    }    

	public function put_update()
    {
        $id = Input::get('id');
        $validation = Category::validate(Input::all());

        if( $validation->fails() ) 
        {
            return Redirect::to_route('admin/new_category')
                ->with_errors($validation)->with_input();
        } else {
            Category::update($id, array(
                'name' => Input::get('name'),
                'url_name' => Str::slug(Input::get('name'), '-'),
                'description' => Input::get('description')
            ));
                    
        }
        return Redirect::to_route('admin/categories')
            ->with('message', 'Category was successfully updated!');
    }

    public function delete_destroy()
    {
        Category::find(Input::get('id'))->delete();
        return Redirect::to_route('admin/categories')
            ->with('message', 'Category was successfully deleted!');
    }    
}