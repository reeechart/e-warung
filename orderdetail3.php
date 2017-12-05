<!DOCTYPE html>
<html>
<head>
	<title>My Orders - e-Warung</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/master.css">
 	<link rel="icon" href="img/e-warung.png">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include_once("navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h1>Order Details</h1>
		</div>
		<div class="order-info">
			<div class="floatright order-status delivering status-fixed-height"><span class="order-detail-status beige-text">Delivering</span></div>
			<button class="floatright btn cancel-button disabled">× Cancel</button>
		</div>
		<div class="body-content">
			<div class="location-detail">
				<img class="location" src="img/location.png">
				<span class="location-place">&nbsp Destination: <b>Institut Teknologi Bandung</b></span>
			</div>
			<div class="price-detail">
				<span class="price">Price: <b>Rp 50.000</b></span>
			</div>
			<h3>You ordered: </h3>
			<table class=" order-detail-list table table-hover table-responsive">
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Quantity</th>
				</tr>
				<tr>
					<td class="img-container"><img class="order-img" src="img/chickencordonbleu.jpg"></td>
					<td>Chicken Cordon Bleu</td>
					<td>1</td>
				</tr>
			</table>
		</div>
		<button class="back-button" onclick="goBack()">❮ Back</button>
	</div>
</body>
<script src="js/master.js"></script>
</html>