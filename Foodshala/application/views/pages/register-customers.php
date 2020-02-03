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
    <style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</head>
<body>
    
<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

    <div class="login-reg-panel">
        <div class="register-info-box">
             <h2>WELCOME CUSTOMER!!</h2>
			<h5>Great Food is Waiting For You :)</h5>
            <p>Our team will be in your assistance 24x7</p>
            <p>Already A Customer? Let's get back there -></p>
            <a href="login" class="btn btn-outline-light">Back To Login</a>
        </div>
        
		<div class="white-panel">
			<div class="login-show">
                <h2>REGISTER</h2>
                <div class = "reg">
                    <div class="scrollbar scrollbar-primary">
                        <div class="force-overflow">
                            <form method = "post" action = "register-customers">
                                <input type="text" name="username" placeholder="Customer Name">
                                <input type="text" name="email" placeholder="Email">
				                        <input type="password" name="password_1" placeholder="Password">
                                <input type="password" name="password_2" placeholder="Confirm Password">
                                <label class="container">Vegetarian
                                    <input type="radio" checked="checked" name="food_preference" value="Vegetarian">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Non-vegetarian
                                    <input type="radio" name="food_preference" value="Non-Vegetarian">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Both
                                    <input type="radio" name="food_preference" value="Both">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit" class="btn btn-outline-danger btn-lg" name="reg_customer">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br/>
			</div>
		</div>
    </div>
</body>
</html>
    