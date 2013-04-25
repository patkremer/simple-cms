@layout('admin.layouts.master')

@section('content')
	
	{{ render('admin.inc.user_errors') }}

	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)	
			<tr>	    
				<td>{{ $category->id }}</td>    
				<td>{{ $category->name }}</td> 
				<td>{{ $category->description }}</td>
				<td><div class="btn-group">
						{{ HTML::link_to_route('admin/edit_category', 'Edit', array($category->id), array('class' => 'btn btn-warning')) }}
						<a href="#confirm" class="btn btn-danger" role="button" data-toggle="modal">Delete</a>
						<div id="confirm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
					        <div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        	<h3 id="confirmLabel">Delete Post?</h3>
					        </div>
					        <div class="modal-body alert alert-error">
					        	<h5>Are you sure you want to delete this category? <br/> All changes will be permanent. <br/>
					        	<small>Please make sure there are no posts using this category before deleting.</small>
					        	</h5>
					        </div>
					        <div class="modal-footer">
								{{ Form::open('admin/categories/delete', 'DELETE', array('class' => 'form-inline')) }}
									{{ Form::hidden('id', $category->id) }}
									{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					    			<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
								{{ Form::close() }}
					        </div>
					    </div>
					</div>
					    				 
			    	
			    	
				
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

@endsection

