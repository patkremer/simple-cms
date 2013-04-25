@layout('pages.layouts.master')
<?php $pagetitle = 'Blog'; ?>

@section('content')

	<div class="container">
		<div class="row">
			<div class="span8">						 						
				<section class="blog-post well well">
					<h2>{{ Str::title($post->title) }}<small>{{' By ' . $post->user->name }}</small></h2>
											
					<p> {{ $post->body }} </p>
					<div>
						<span class="badge badge-success">Post {{ $post->created_at }}</span> 
						<div class="pull-right"><span class="label label-info"><a href="{{ URL::to_route('blog/category', $post->category->id.'-'.$post->category->url_name) }}">Category: {{ $post->category->name }}</a></span>
					</div>
				</section>
			</div>
			{{ render('pages.inc.sidebar') }}						
		</div>
	</div>

@endsection