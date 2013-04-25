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
    <title>CMS Login</title>
    <meta name="description" content="login">  
    <!-- Le styles -->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Tauri') }}   
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::style('css/bootstrap.css') }}
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

@yield('content')



 <!-- /container -->
    <!-- Le javascript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('http://code.jquery.com/jquery-latest.js') }}
    {{ HTML::script('js/bootstrap-scrollspy.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>