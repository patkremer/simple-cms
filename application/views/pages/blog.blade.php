@layout('pages.layouts.master')
<?php $pagetitle = 'Blog'; ?>

@section('content')

	<div class="container">
			<div class="row">
					<div class="span8">
						@foreach($posts as $post)					 						
							<section class="blog-post well well">
									<a href="{{ URL::to_route('blog/post', $post->id.'-'.$post->url_title) }}" title=""><h2>{{ Str::title($post->title) }}<small>{{ ' By ' . $post->user->name }}</small>	
									</h2></a>
									
									<p><blockquote><em>{{ $post->description }}</em>						
									</blockquote></p>
									<div>
										<span class="badge badge-success">Post {{ $post->created_at }}</span> 
										<div class="pull-right"><span class="label label-info"><a href="{{ URL::to_route('blog/category', $post->category->id.'-'.$post->category->url_name) }}">Category: {{ $post->category->name }}</a></span>
									</div>
							</section>
						@endforeach	
					</div>
					{{ render('pages.inc.sidebar') }}
			</div>
	</div>

@endsection
