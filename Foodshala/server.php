<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost","root","","restaurant",3308);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = 1;

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  echo("The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    echo("The two passwords do not match");
  }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        echo("Username already exists");
        }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        echo("email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
  
      $query = "INSERT INTO users (username, email, passcode,type) 
            VALUES('$username', '$email', '$password','$type')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['type'] = $type;
      $_SESSION['success'] = "You are now logged in";
      header('location: inventory');
    }
  }
}


//Register Customer
if (isset($_POST['reg_customer'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $foodpreference = mysqli_real_escape_string($db, $_POST['food_preference']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  echo("The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (isset($_POST['reg_customer'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $foodpreference = mysqli_real_escape_string($db, $_POST['food_preference']);
    $type = 0;
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    echo("The two passwords do not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        echo("Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        echo("email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
  
      $query = "INSERT INTO users (username, email, passcode,type,foodpreference) 
            VALUES('$username', '$email', '$password','$type', '$foodpreference')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['type'] = $type;
      $_SESSION['success'] = "You are now logged in";
      header('location: menu');
    }
  }
}

//LOGIN USER

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$pass = md5($pass);
    $query = "SELECT * FROM users WHERE username = '$username' AND passcode = '$pass'";
    $result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['type'] =1;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: menu');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//Uploading Data from Inventory
  if (isset($_POST['upload'])) {

  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$food_name = mysqli_real_escape_string($db, $_POST['food_name']);
    $food_amount = mysqli_real_escape_string($db, $_POST['food_amount']);
    $food_description = mysqli_real_escape_string($db, $_POST['food_description']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO menu_items (image, item_name, item_amount, food_description) VALUES ('$image', '$food_name', '$food_amount', '$food_description')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      header('location:order');
  	}else{
      $msg = "Failed to upload image";
      header('location:inventory');
  	}
}

//Uploading Data from Menu
if (isset($_POST['order'])) {
  // Get text
  $username = "SELECT ROW_NUMBER(count),username FROM users";
  $result1=mysqli_query($db, $username);
  $item_name = "SELECT ROW_NUMBER(count),item_name FROM menu_items where id = '$count'";
  $result2=mysqli_query($db, $item_name);
  $item_image = "SELECT ROW_NUMBER(count),image FROM menu_items where id = '$count'";
  $result3=mysqli_query($db, $item_image);

  // image file directory
  $target = "images/".basename($image);

  $sql = "INSERT INTO order_items (image, item_name, username) VALUES ('$result3', '$result2', '$result1')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
    header('location:home');
  }else{
    $msg = "Failed to upload image";
    header('location:menu');
  }
}

?>

