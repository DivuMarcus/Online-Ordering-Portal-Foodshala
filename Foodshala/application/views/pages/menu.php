<?php  
include('server.php');
$query = "SELECT * FROM menu_items";
$result = mysqli_query($db, $query);
?>

<html>  
    <head>  
        <title>FOODSHALA</title>  
        <link rel="stylesheet" href="css/menu.css">
    </head>  
    <body>  
    <div class="content">

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="home?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
        <div class="container">
            <br/><br/><br/><br/><br/><br/><br/>
            <section id="menu" class="parallax-section">
	            <div class="container">
		            <div class="row">
			            <div class="col-md-12 col-sm-12">
				            <center><h1>Menu</h1></center>
				            <center><h2>FOR THE BEST IN THE WORLD</h2></center>
                            <center><h3>WELCOME TO THE WORLD OF TASTE</h3><center>
			            </div>
		            </div>
	            </div>		
            </section>
        </div>
        <br/><br/>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Image Of Dish</th>
                        <th>Name Of Dish</th>
                        <th>Price Of Dish</th>
                        <th>Restaurant Name</th>
                        <th>Want To Order?<th>
                </thead>
                <?php
                $count = 0; 
                while($rows = mysqli_fetch_array($result)){
                $count++;?>
                <tbody>
                    <tr>
                        <td><img src='images/<?php echo $rows['image']?>' height="200" width="200"></td>
                        <td><?php echo $rows['item_name']?></td>
                        <td><?php echo "$ "; echo $rows['item_amount']?></td>
                        <td><?php echo $rows['restaurant_name']?></td>
                        <td><form method="post" ><?php
                         if ($_SESSION['type'] != 'customer'):?>
                            <button type="submit" disabled class="btn btn-danger btn-lg btn-block">Sorry You Can't Order</button></form></td>
                         <?php else: ?>
                            <button type="submit" name="order" class="btn btn-danger btn-lg btn-block">Order Here</button></form></td>
                         <?php endif; ?>
                    </tr>
                </tbody>
            <?php  
          }
            ?> 
        </table>
        </div>
    </body>
</html>