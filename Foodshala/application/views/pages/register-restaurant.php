<?php include('server.php') ?> 

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
			<h2>WELCOME RESTAURANT!!</h2>
            <h5>We Will Love To Host Your Tasty Food :)</h5
			<p>Our team will be in your assistance 24x7</p>
			<p>Already Registered?</p>
            <a href="login" class="btn btn-outline-light">Back To Login</a>
        </div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>REGISTER</h2>
				<form method="post" action="register-restaurant">
					<input type="text" name="username" placeholder="Restaurant Name">
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password_1" placeholder="Password">
                	<input type="password" name="password_2" placeholder="Confirm Password">
                	<button type="submit" class="btn btn-outline-danger btn-lg" name="reg_user">Register</button>
				</form>	
			</div>
		</div>
    </div>
</body></html>
    