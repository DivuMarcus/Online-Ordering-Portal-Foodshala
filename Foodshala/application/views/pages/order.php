<?php include('server.php');
$query = "SELECT * FROM order_items";
$result = mysqli_query($db, $query);
?>

<html>  
    <head>  
        <title>FOODSHALA</title>  
        <link rel="stylesheet" href="css/menu.css">
    </head>  
    <body>  
        <div class="container">
            <br/><br/><br/><br/><br/><br/><br/>
            <section id="menu" class="parallax-section">
	            <div class="container">
		            <div class="row">
			            <div class="col-md-12 col-sm-12">
				            <center><h1>Order Corner</h1></center>
				            <center><h2>IT'S YOUR TIME TO SHOW OFF YOUR SKILLS!</h2></center>
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
                        <th>Ordered By</th>
                </thead>
                <?php
                 while($rows = mysqli_fetch_array($result)){
                    ?>
                <tbody>
                    <tr>
                        <td><img src='images/<?php echo $rows['image']?>' height="200" width="200"></td>
                        <td><?php echo $rows['item_name']?></td>
                        <td><?php echo $rows['username']?></td>
                    </tr>
                </tbody>
            <?php  
          }
            ?> 
        </table>
        </div>
    </body>
</html>
