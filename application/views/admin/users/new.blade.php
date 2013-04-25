@layout('admin.layouts.master')

@section('content')

	{{ render('admin.inc.user_errors') }}
	
	{{ Form::open('admin/users', 'POST', array('class' => 'form-horizontal')) }}
		<div class="control-group"> 
			{{ Form::label('name', 'Name', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::text('name', Input::old('name'), array('placeholder' => 'Name')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('username', Input::old('username'), array('placeholder' => 'Username')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::email('email', Input::old('email'), array('placeholder' => 'Email')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('bio', 'Bio - (optional)', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('bio', Input::old('bio'), array('placeholder' => 'Bio (optional)')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::password('password', array('placeholder' => 'Password')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::password('password_confirmation', array('placeholder' => 'Password Confirmation')) }} 
			</div>
		</div>
		<div class="control-group">
				<div class="controls">
				{{ Form::submit('Create User', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
	{{ Form::close() }}

    	
@endsection