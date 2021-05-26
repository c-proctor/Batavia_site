<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    
    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>
    
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&family=Nothing+You+Could+Do&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<?php wp_head(); ?> <!—very important that this is added-->
</head>

<body>


    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
                <a class="navbar-brand" href="index.html"><img class="img-responsive nav-image" alt=“logo” src="images/nav-logo.png"> Batavia Gallery</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"></li>
                    <li><a href="#">WHAT'S ON</a></li>
                    <li><a href="discover.html">DISCOVER</a></li>
                    <li><a href="services.html">ACCESS</a></li>
                    <li><a href="#">EDUCATION</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="container-fluid herobg">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10 text-right">
                    <h1 class="text-right">SHIPWRECK, MUTINY <br>AND MURDER</h1>
                    <button type="button" class="btn btn-primary btn-sm learnmore">LEARN MORE</button>
                </div>
            </div>
        </div>
    </header>