@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}

	{{ Form::open('admin/users/update', 'PUT', array('class' => 'form-horizontal')) }}
		<div class="control-group"> 
			{{ Form::label('name', 'Name', array('class' => 'control-label')) }}
			<div class="controls"> 
			{{ Form::text('name', $user->name, array('placeholder' => 'Name')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('username', $user->username, array('placeholder' => 'Username')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::email('email', $user->email, array('placeholder' => 'Email')) }}
			</div>
		</div>
		<div class="control-group"> 
			{{ Form::label('bio', 'Bio - (optional)', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('bio', $user->bio, array('placeholder' => 'Bio (optional)')) }}
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
				{{ Form::submit('Update User', array('class' => 'btn btn-success')) }}
				{{ Form::hidden('id', $user->id)}}
			</div>
		</div>

	{{ Form::close() }}

    
@endsection