@layout('admin.layouts.master')

@section('content')
	
    <h2>Welcome to the Blog Manager!</h2>
    <p>Here you can create, edit, and delete blog posts. You can also manage your user account, or create an account for a new user.</p>
    <h3>Blog Posts</h3>
    <p>When creating blog posts there are a few things to consider:</p>
    <blockquote>    	
    <ol>
    	<li>All posts must have a category, if a category isn't selected one will be set by default.</li>
    	<li>All posts must have a title and a body.</li>
    	<li>Lastly, the description section should be filled out <b>everytime</b>. This should be roughly 40-60 words about the post, it will be posted with the title to the homepage in the "News" section.</li>
    </ol>
    </blockquote>
    <h3>Categories</h3>
    <p>Some information about categories.</p>
    <blockquote> 
    <ul>
    	<li>Categories should be created <b>before</b> a post is made about the category</li>
    	<li>They should be general topics, nothing to specific. An example of this is using Food as a category, since there are many types of food this covers a wide range of topics.</li>
    	<li>You shouldn't need more than a few categories, soon you will also be able to add tags which are more post specific and less generalized. Tags will be coming soon.</li>
    </ul>
    </blockquote>

    <h3>Users</h3>
    <p>Information about users.</p>
    <blockquote> 
    <ul>
        <li>There is no such thing as a role yet, so all users have the same ability to create, update, and delete. So please be aware and don't allow anyone but employee's to create posts.</li>
        <li>Whoever wants to make a post can, someone who has access will just have to log-in and create a new user for them.</li>
        <li>Lastly, if you don't want to create a 'bio' that is fine, it is optional. Also, I currently haven't implemented a way to reset passwords.</li>
    </ul>
    </blockquote>
   
    
@endsection