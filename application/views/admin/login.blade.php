@layout('admin.layouts.auth')

@section('content')

<body class="admin-sign-in">
	<div class="container-fluid">
		<div class="sign-in">	
			<h1>Login Page</h1>
			{{ Form::open('admin/login', 'POST', array('class' => 'form-inline')) }}
				<div class="control-group">
					<div class="controls">
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username','', array('placeholder' => 'Username...')) }}
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', array('placeholder' => 'Password...')) }}
					</div>
				</div>
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</div>	
    
@endsection
	

