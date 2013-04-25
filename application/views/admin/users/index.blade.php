@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}
	
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>User Profile</th>
				</tr>
			</thead>	
			<tbody>
	@foreach($users as $user)	
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ HTML::link_to_route('admin/user', $user->name, array($user->id)); }}</td>
				</tr>
	@endforeach		
			</tbody>
		</table>
			    
		


@endsection