@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}
	
	{{ Form::open('admin/posts/update', 'PUT', array('class' => 'form-inline')) }}
		<div class="control-group">
			{{ Form::label('category', 'Category', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::select('category', array($post->category_id => $post->category->name)) }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('title', 'Title', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('title', $post->title, array('placeholder' => 'Title')) }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('description', $post->description, array('placeholder' => 'Limit to 50 words, the description will be displayed on the front page.')) }}
			</div>
		</div>	
	    <div class="control-group">
			{{ Form::label('body', 'Body', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('body', $post->body, array('class' => 'textarea', 'placeholder' => 'The main content of your blog post.')) }}
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				{{ Form::submit('Update Post', array('class' => 'btn btn-success')) }}	
				{{ Form::hidden('id', $post->id) }}		
			</div>		
		</div>	
@endsection