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
    <link rel="stylesheet" href="css/inventory.css">
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
			<div class="login-show">
        <br/>
        <br/>
        <h2>Inventory</h2>
        <br/>
        <div id="container">
          <form method="POST" action='inventory' enctype="multipart/form-data">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="food_name" class="text-left">Name Of The Dish</label>
                <input type="text" class="form-control" id="food_name" name="food_name" value="Name Of The Dish" required>
              </div>
              <div class="col-md-6">
                <label for="food_amount" class="text-left">Price Of The Dish(In Rupees)</label>
                <input type="number" min="0" class="form-control" id="food_amount" name="food_amount" value="Price Of The Dish" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="food_description" class="text-left">Description Of The Dish</label>
                <input type="text" class="form-control" id="food_description" name="food_description" value="Description Of The Dish" required>
              </div>
              <div class="col-md-6">
                <label for="food_image" class="text-left">Image Of The Dish</label>
                <input type="file" class="form-control" id="food_image" name="image" value="Image Of The Dish" required>
              </div>
            </div>
            <div class="form-group column">
              <div class="my-col-md-3">
                <button type="submit" name="upload" class="btn btn-danger btn-lg btn-block">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>