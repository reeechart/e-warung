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
			<h1>Order Details</h1>
		</div>
		<div class="order-info">
			<div class="floatright order-status queued status-fixed-height"><span class="order-detail-status">Queued</span></div>
			<button class="floatright cancel-button" onclick="cancelOrder()">× Cancel</button>
		</div>
		<div class="body-content">
			<h3>You ordered: </h3>
			<table class=" order-detail-list table table-hover table-responsive">
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Quantity</th>
				</tr>
				<tr>
					<td class="img-container"><img class="order-img" src="img/nasiputih.jpg"></td>
					<td>Nasi Putih</td>
					<td>5</td>
				</tr>
				<tr>
					<td class="img-container"><img class="order-img" src="img/ayambakar.jpg"></td>
					<td>Ayam bakar</td>
					<td>3</td>
				</tr>
				<tr>
					<td class="img-container"><img class="order-img" src="img/kolgoreng.jpg"></td>
					<td>Kol goreng</td>
					<td>5</td>
				</tr>
			</table>
		</div>
		<button class="back-button" onclick="goBack()">❮ Back</button>
	</div>
</body>
<script src="js/master.js"></script>
</html>