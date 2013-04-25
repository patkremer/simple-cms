@layout('admin.layouts.master')

@section('content')

    <table class="table table-striped table-hover table-bordered">
    	<thead>
    		<tr>
    			<th>Title</th>
    			<th>Created At</th>
    			<th>Updated At</th>
    			<th>Author Name</th>
    		</tr>
    	</thead>
    	<tbody>
    	@foreach($posts as $post)
    		<tr>
    			<td>{{ HTML::link_to_route('admin/post', $post->title, $post->id.'-'.$post->url_title) }}</td>
    			<td>{{ $post->created_at }}</td>
    			<td>{{ $post->updated_at }}</td>
    			<td>{{ $post->user->name }}</td>

    		</tr>
    	@endforeach
    	</tbody>
    </table>
    
@endsection