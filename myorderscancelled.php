<!DOCTYPE html>
<html>
<head>
	<title>My Orders - e-Warung</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/master.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include_once("navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h1>Your Orders</h1>
		</div>
		<div class="body-content">
			<!--<ul class="list-group">
				<a href="orderdetail1.php">
					<li class="list-group-items">
						<div class="status-queued floatleft">
						</div>
					</li>
					<li class="list-group-items">
						<div class="status-ready floatleft">
						</div>
					</li>
					<li class="list-group-items">
						<div class="status-delivering floatleft">
						</div>
					</li>
					<li class="list-group-items">
						<div class="status-cooked floatleft">
						</div>
					</li>
				</a>
			</ul>-->
			<a class="order-link" href="orderdetail2.php">
				<div class="order-item col-sm-12">
					<div class="floatleft order-status ready">
						Order #2<br>
						Ready to Deliver
					</div>
					<div class="ordered-items">
						Nasi goreng ikan teri + pete
					</div>
					<img class="floatright arrow-icon" src="img/right-arrow.png">
				</div>
			</a>
			<a class="order-delivering" href="orderdetail3.php">
				<div class="order-item col-sm-12">
					<div class="floatleft order-status delivering">
						Order #3<br>
						Delivering
					</div>
					<div class="ordered-items">
						Chicken Cordon Bleu
					</div>
					<img class="floatright arrow-icon" src="img/right-arrow.png">
				</div>
			</a>
			<a class="order-link" href="orderdetail4.php">
				<div class="order-item col-sm-12">
					<div class="floatleft order-status cooked">
						Order #4<br>
						Being cooked
					</div>
					<div class="ordered-items">
						Sirloin Steak with Potatoes
					</div>
					<img class="floatright arrow-icon" src="img/right-arrow.png">
				</div>
			</a>
		</div>
	</div>
</body>
</html>