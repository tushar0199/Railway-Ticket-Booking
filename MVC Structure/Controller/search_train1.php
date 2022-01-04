<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Train </title>
		<?php include '../View/front_Design.php';?>
		</head>
  <body>
 <!-- following section is used for creating the menubar in the webpage -->

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bengal Railway </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
                <a href="add_trains.php" style="text-align: center;font-size: 25px; color:#2d2244"> Add Train </a> 
				<a href="cancel_train.php" style="margin-left: 20px;"> Cancel Train </a> 
				<a href="update_seats.php" style="margin-left: 20px;"> Update Seats </a><br><br><br>
				 
				 
			</div>
		</div>
	</section>
	


	<?php include '../View/front.php';?>
</body>
</html>