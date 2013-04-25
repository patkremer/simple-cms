@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}

	{{ Form::open('admin/posts', 'POST', array('class' => 'form-inline')) }}
		<div class="control-group">
			{{ Form::label('category', 'Category', array('class' => 'control-label')) }}
			<div class="controls">
				<select name="category">
					@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('title', 'Title', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('title', Input::old('title'), array('placeholder' => 'Title')) }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('description', Input::old('description'), array('placeholder' => 'The description will be displayed on the front page.')) }}
			</div>
		</div>	
	    <div class="control-group">
			{{ Form::label('body', 'Body', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('body', Input::old('body'), array('class' => 'textarea', 'placeholder' => 'The main content of your blog post.')) }}
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				{{ Form::submit('Create Post', array('class' => 'btn btn-success')) }}			
			</div>		
		</div>
	{{ Form::close() }}
@endsection
