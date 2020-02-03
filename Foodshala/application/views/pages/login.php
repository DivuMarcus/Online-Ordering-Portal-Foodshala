<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FOODSHALA</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
    
<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<div class="login-reg-panel">
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
            <p>We Will Help You Get There :)</p>
            <a href="register-customers" class="btn btn-outline-light">Customers</a>
            <br/><br/>
            <a href="register-restaurant" class="btn btn-outline-light">Restaurant</a>
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<form method="post" action="login">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<button type="submit" class="btn btn-outline-danger btn-lg" name="login_user">Login</button>
				</form>
				<a href="">Forgot password?</a>
			</div>
		</div>
    </div>
</body>
</html>