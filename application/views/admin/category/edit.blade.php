@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}
	{{ Form::open('admin/categories/update', 'PUT', array('class' => 'form-horizontal')) }}
		<div class="control-group"> 
			{{ Form::label('name', 'Name', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::text('name', $category->name, array('placeholder' => 'Name')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::textarea('description', $category->description, array('placeholder' => 'Description')) }}
			</div>
		</div>
		<div class="control-group">
				<div class="controls">
				{{ Form::submit('Update Category', array('class' => 'btn btn-primary')) }}
				{{ Form::hidden('id', $category->id)}}
			</div>
		</div>
	{{ Form::close() }}

@endsection