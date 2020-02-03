<?php include('server.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>FOODSHALA</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand">FOODSHALA</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="home" class="smoothScroll">HOME</a></li>
				<li><a href="menu" class="smoothScroll">MENU</a></li>
				<li><a href="about" class="smoothScroll">ABOUT</a></li>
				<li><a href="login" class="smoothScroll">WELCOME <?php 
				if (isset($_SESSION['username']) == true){
					echo $_SESSION['username']; ?>
					<a href="home?logout='1'" style="color: red;">logout</a>
				<?php }
				else{
					echo("USER");
				}?></li>
			</ul>
		</div>
	</div>
</section>