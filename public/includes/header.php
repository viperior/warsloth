<?php session_start(); ?>
<?php include "../settings.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $companyName ?></title>

	<!-- Bootstrap Core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="./css/business-frontpage.css?version=1.0.2" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery -->
	<script src="./js/jquery-3.1.1.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="./js/bootstrap.min.js"></script>

	<!-- PIN Code Security -->
	<script src="./js/pin.js"></script>

</head>

<body id="<?php echo $companyBodyClass ?>">

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="."><?php echo $companyName ?></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="upload.php">Upload File</a>
					</li>

					<?php
						// Check whether user is logged in
						if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
						{
							// Show Account and Log Out menu items
							echo '<li><a href="account.php">Account</a></li>';
							$username = $_SESSION["username"];
							echo '<li><a href="logout.php">Log out</a></li>';
						}
						else
						{
							// Show Login menu item
							echo '<li><a href="login.php">Login</a></li>';
						}
					?>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<?php if( !isset($is_homepage) ) { $is_homepage = false;} ?>
	<?php if($is_homepage) { ?>
		<!-- Image Background Page Header -->
		<!-- Note: The background image is set within the business-casual.css file. -->
		<header class="business-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!--h1 class="tagline">Oppurtunity From Chaos</h1-->
					</div>
				</div>
			</div>
		</header>
	<?php } ?>

	<!-- Page Content -->
	<div class="container">
