<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8 <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9 <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="description" content="CMS">  
    <!-- Le styles -->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Tauri') }}   
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-wysihtml5.css') }}
    {{ HTML::style('css/admin.css') }}

    @yield('stylesheets')
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/nav_logo.ico">
    <link rel="apple-touch-icon-precomposed" href="img/nav_logo.ico">

</head>
<body>
    
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="{{ URL::to_action('/') }}">
                  Blog
              </a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                      <li class="<?php echo ( URI::is('admin/dashboard') ? 'active' : false )?>"><a href="<?php echo url('admin/dashboard')?>">Home</a></li>
                      <li class="<?php echo ( URI::segment(2) == 'posts' ? 'active' : false )?>"><a href="<?php echo url('admin/posts')?>">Posts</a></li>
                      <li class="<?php echo ( URI::segment(2) == 'users' ? 'active' : false )?>"><a href="<?php echo url('admin/users')?>">Users</a></li>
                      <li class="<?php echo ( URI::segment(2) == 'categories' ? 'active' : false )?>"><a href="<?php echo url('admin/categories')?>">Categories</a></li>
                      <li><a href="<?php echo url('admin/logout')?>">Logout {{ Auth::user()->username }}</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
    	<div class="span12">
            <h1 class="text-center">{{ $title }}</h2>
        </div>
		<div class="span12">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p class="text-center">{{ Session::get('message') }}</p>
                </div>
            @endif
        </div>
    </div>
	

	
	<div class="container-fluid">
        <div class="row-fluid">
    		{{ render('admin.inc.side_panel') }}
    		<div class="span9 content">
    			@yield('content')
    		</div>
        </div>
	</div>

 <!-- /container -->
    <!-- Le javascript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('js/jquery.js') }}  
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/wysihtml5.min.js') }}
    {{ HTML::script('js/bootstrap-wysihtml5.min.js') }}
    <script type="text/javascript">
        $('.textarea').height( $(window).height() - 500 );
        $('.textarea').wysihtml5();
    </script>

</body>
</html>