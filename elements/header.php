<!DOCTYPE html>
<html>
	<head>
		<title>Awesome Site</title>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="header col-lg-12">
					<div class="page-header">
					  <h1>My Awesome Site <small>Subtext for header</small></h1>
					</div>				
				</div>
				<div class="menu col-lg-12">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">					   
					  	<!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>					      
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
					        <li><a href="./?page=lessons">Lessons</a></li>
					        <li><a href="./?page=lessons">Contact Us</a></li>
					      </ul>					     
					      <ul class="nav navbar-nav navbar-right">
					      	<?php if( isset( $_SESSION[ 'User.id' ] ) ) : ?>
					        <li><a href="<?php echo ROOT_URL ?>/?action=logout">Logout</a></li>
					      	<?php else: ?>
				      		<li><a href="<?php echo ROOT_URL ?>?page=login">Login</a></li>
					      	<?php endif; ?>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
			<?php 				
				if( isset( $_SESSION[ 'MESSAGE' ] ) && !empty( $_SESSION[ 'MESSAGE' ] ) ) {					
					echo "<div class='row'><div class='col-lg-12'><div class='alert alert-{$_SESSION[ 'MESSAGE_TYPE' ]}'>{$_SESSION[ 'MESSAGE' ]}</div></div></div>";
				} 
			?>
			<div class="main-content row">				
				<div class="col-lg-12 col-md-12">
				<!-- START OF CONTENT -->