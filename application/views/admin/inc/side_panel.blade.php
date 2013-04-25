<div class="span3 sidebar well well-small">
	<h3>{{ HTML::link_to_route('admin', 'Admin Panel') }}</h3>
	<ul>
		<h4>Posts</h4>
		<li>{{ HTML::link_to_route('admin/posts', 'All Posts') }}</li>
		<li>{{ HTML::link_to_route('admin/new_post', 'New Post') }}</li>
		<h4>Categories</h4>
		<li>{{ HTML::link_to_route('admin/categories', 'All Categories') }}</li>
		<li>{{ HTML::link_to_route('admin/new_category', 'New Category') }}</li>
		<h4>Users</h4>
		<li>{{ HTML::link_to_route('admin/users', 'All Users') }}</li>
		<li>{{ HTML::link_to_route('admin/new_user', 'New User') }}</li>
	</ul>
</div>