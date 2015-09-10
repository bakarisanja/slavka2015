<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>sla fashion unique accessories</title>

    <!-- Bootstrap -->
     <link href=<?php echo base_url()."/assets/css/bootstrap.min.css"?> rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	
	<!-- css sla -->
	<link href=<?php echo base_url()."/assets/css/sla.css"?> rel="stylesheet">
	<!--ihover css-->
	<link href=<?php echo base_url()."/assets/css/ihover.css"?> rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	
		<!--za jezik-->
	
		<a class="navbar-brand navbar-right" href="#"><span class="eng"></span> / <span class="srp"></span></a>
		
		
		<!--za smanjenje za mobilni-->
		 <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--logo, uvek je tu-->
			<a class="navbar-brand" href="#"><span class="brand">SLA</span><span class="brand1">fashion</span></br><span class="brand2">unique accessories</span></a>
		</div>
		
		<!--za skupljanje kada se otvori na mobilnom-->
		<div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href=<?php echo base_url()."logout"; ?>>logout</a></li>
				<li><a href=<?php echo base_url()."admin"; ?>>blog</a></li>
				<li><a href=<?php echo base_url()."admin/categories"; ?>>categories</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">products <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href=<?php echo base_url()."admin/category/1"?>>pojasevi</a></li>
					<li><a href="#">brooches</a></li>
					<li><a href="#">head bands</a></li>
					<li><a href="#">necklace</a></li>
					<li><a href="#">bracelets</a></li>
					<li><a href="#">babies corner</a></li>
				  </ul>
				</li>
			</ul>
		</div>
		
	</div>
</nav>