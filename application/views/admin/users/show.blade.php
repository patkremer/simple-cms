@layout('admin.layouts.master')

@section('content')
    <h3>Name: <small>{{ $user->name }}</small>
    <h3>Email: <small>{{ $user->email }}</small>
    <h3>Username: <small>{{ $user->username }}</small> 
    <h3>Bio: <small>{{ $user->bio }}</small> 
   
   	<div class="btn-group">
   		{{ HTML::link_to_route('admin/edit_user', 'Edit', array($user->id), array('class' => 'btn btn-warning')) }}
    	<a href="#confirm" class="btn btn-danger" role="button" data-toggle="modal">Delete</a>
    	<div id="confirm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
	        <div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h3 id="confirmLabel">Delete Post?</h3>
	        </div>
	        <div class="modal-body alert alert-error">
	        	<h5>Are you sure you want to delete this user? All changes will be permanent.</h5>
	        </div>
	        <div class="modal-footer">
				{{ Form::open('admin/users/delete', 'DELETE', array('class' => 'form-inline')) }}
    				{{ Form::hidden('id', $user->id) }}
    				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
	    			<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
				{{ Form::close() }}
	        </div>
	    </div>
    </div>
@endsection

	