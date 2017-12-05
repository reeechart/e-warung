<!DOCTYPE html>
<html>
<head>
	<title>Login to e-Warung</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/master.css">
 	<link rel="icon" href="img/e-warung.png">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="background-red">
	<div class="login-container">
		<img class="login-icon" src="img/e-warung.png">
		<h1 class="centered beige-text">Welcome to e-Warung</h1>
		<h3 class="centered beige-text">Login now to order</h3>
		<div class="login-form">
			<form method="post" action="order.php">
				<div class="form-group">
					<label class="beige-text" for="username">Username</label>
					<input type="username" class="form-control" id="uname" placeholder="Username" name="uname">
				</div>
				<div class="form-group">
					<label class="beige-text" for="password">Password</label>
					<input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
				</div>
				<button type="submit" class="btn btn-default">Login</button>
			</form>
		</div>
	</div>
</body>
</html>