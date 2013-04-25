@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}
	
	{{ Form::open('admin/categories', 'POST', array('class' => 'form-horizontal')) }}
		<div class="control-group"> 
			{{ Form::label('name', 'Name', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::text('name', Input::old('name'), array('placeholder' => 'Name')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::textarea('description', Input::old('description'), array('placeholder' => 'Description')) }}
			</div>
		</div>
		<div class="control-group">
				<div class="controls">
				{{ Form::submit('Create Category', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
	{{ Form::close() }}



@endsection