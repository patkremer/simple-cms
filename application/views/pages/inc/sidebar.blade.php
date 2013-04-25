<div class="span3 well  well-small sidebar">
	<h4>Recent Posts</h4>
	<ul class=" articles nav nav-list">
	@foreach($posts as $post)
	   <li>{{ HTML::link_to_route('blog/post', $post->title, $post->id.'-'.$post->url_title) }}</li>    
	@endforeach
	</ul>

	<h4>Categories</h4>
	<ul class=" articles nav nav-list">
	@foreach($categories as $category)
	   <li><a href="{{ URL::to_route('blog/category', $category->id.'-'.$category->url_name) }}" title="{{ $category->name }}">{{ $category->name }}</a></li>
	@endforeach
	</ul>
</div>