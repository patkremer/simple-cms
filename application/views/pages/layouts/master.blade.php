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
  <title>Simple CMS!</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  
  {{ HTML::style('http://fonts.googleapis.com/css?family=Tauri') }}   
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/font-awesome.min.css') }}
  {{ HTML::style('css/font-awesome-ie7.min.css') }}
  {{ HTML::style('css/custom.css') }}
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
      <div class="container">
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
            <li class="<?php if ($pagetitle == 'Blog') { echo "active"; } ?>"><a href="{{ URL::to_action('blog') }}"><i class="icon-info-sign"></i> Blog</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <header>
    <div class="container">
      <div class="row">
        <div class="span12">
          <h1>Blog!</h1>
        </div>
      </div>
    </div>
  </header>
  
  <div class="container">
     
     @yield('content')      
  
  </div>


  <div id="foot"> 
    <hr>
    <div class="container"> 
      <footer class="row">
        <address class="span4">
          
        </address>
          
        <p class="span4" id="copyright">© Whoever <?php echo date('Y') ?></p>   

      </footer>
    </div>
  </div>    
 <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  {{ HTML::script('js/jquery.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}     

</body>
</html>