<?php
	// Define the site path
	$site_path = 'http://localhost/lovegrove_04/';
	$inc_path = 'http://localhost/lovegrove_04/pages/inc/';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lovegrove Design</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	
	<!-- BOOTSTRAP Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- GOOGLE FONTS Open Sans -->
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $site_path . 'css/styles.css' ?>">

</head>

	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- MASTHEAD THIN -->
	<div class="masthead-thin hidden-xs">
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<span>Lovegrove Design</span>
				</div><!--ENDS col-->
				<div class="col-sm-6 text-right">
					<span><i class="fa fa-phone-square"></i> 021 0277 1109 <i class="fa fa-envelope"></i> Email <i class="fa fa-linkedin-square"></i> LinkedIn</span>
				</div><!--ENDS col-->

			</div><!--ENDS row-->
		</div><!--ENDS container-->
	</div>


	<!-- MAIN NAV BAR -->
	<nav class="navbar navbar-default navbar-fixed-top hidden-xs">
		<div class="container container-menu">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $site_path; ?>index.php">HOME</a>
			</div><!-- ENDS navbar-header -->

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active websites"><a href="<?php echo $site_path; ?>index.php">Case Studies</a>
						<div class="home-websites"><?php include('websites.php'); ?></div>
					</li>

					<li class="graphics"><a href="<?php echo $site_path; ?>pages/hovers.php">Graphics</a>
						<div class="home-graphics"><?php include('graphics.php'); ?></div>
					</li>

					<li><a href="<?php echo $site_path; ?>pages/keyframes.php">Logos</a></li>
					<li><a href="<?php echo $site_path; ?>pages/keyframes.php">Misc</a></li>
					<li class="dropdown">
					<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
					</li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../navbar/">Contact</a></li>
				</ul>
			</div><!--ENDS navbar-collapse -->

		</div><!-- ENDS container -->
	</nav><!-- ENDS navbar -->



	<!-- MOBILE NAV BAR -->
	<nav id="mobile" class="visible-xs">
		<div id="menuToggle">
			<input type="checkbox" id="myCheckbox">
			<span></span>
			<span></span>
			<span></span>
			<ul id="menu">
				<li><a href="<?php echo $site_path; ?>index.php"><i class="fa fa-chevron-right"></i> Home</a>
					<ul id="submenu">
						<li><a href="#">One</a></li>
						<li><a href="#">Two</a></li>
					</ul>
				</li>
				<li><a href="<?php echo $site_path; ?>pages/hovers.php"><i class="fa fa-chevron-right"></i> Hovers</a></li>
				<li><a href="<?php echo $site_path; ?>pages/keyframes.php"><i class="fa fa-chevron-right"></i> Graphics</a></li>
				<li><a href="<?php echo $site_path; ?>pages/keyframes.php"><i class="fa fa-chevron-right"></i> Logos</a></li>
			</ul>
		</div>
	</nav>


	<div class="band-nav-mobile visible-xs">
		<div class="logo-large">
			<a href="<?php echo $site_path; ?>index.php">LD</a>
		</div>
		<p>Lovegrove Design</p>
	</div><!--ENDS band-->



	<div class="container test">
		<div class="row">
			<div class="col-lg-12">
				<p>Hello its me</p>
			</div>
		</div><!--ENDS row-->
	</div><!--ENDS container-->