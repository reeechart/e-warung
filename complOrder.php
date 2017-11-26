<?php
    $destination = $_POST["destination"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Finish Order - e-Warung</title>
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
            <h1>Finish your Order</h1>
            <h3> Your Order </h3>
                <div class='dispfood'>
                    <div class='foodimg'>
                        <img class='food' src=img/sirloinsteak.jpg> 
                    </div>
                    <div class='foodname' id='gehu'>
                        <div class='fooddet'>
                            Sirloin Steak with potatoes <br> 
                            <div class='fooddesc'> Quantity: 1 porsi </div>
                            </div>
                        </div>
                    </div>
            <h3> Payment Details </h3>
            <div style="margin:50px"> 
                Total Payment: Rp.65.000 <br>
                Payment Method: 
                <select>
                    <option value="Cash">Cash</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Credit Card">Credit Card</option>
                </select>
            </div>
            <h3> Destination Address </h3>
            <div style="margin:50px"> 
                <div class='dispfood'>
                    <div class='foodimg'>
                        <img class='food' src=img/map.PNG> 
                    </div>
                    <div class='foodname' id='gehu'>
                        <div class='fooddet'>
                            <input type="text" value="<?=$destination?>">
                            <br>
                            <div class='fooddesc'> <input type="button" onclick="editLocation()" value="Edit Location" style="background:blue;
            display: block;
            line-height: 50px;
            text-align: center;
            color: white;
            font-size: 20px;"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <form method="post" action="myorders.php">
                <input type="submit" value="cancel" style="float:right; background-color: red; margin:5px;">
                &nbsp;
                <input type="submit" value="Confirm" style="float:right; background-color: green; margin:5px;">
            </form>
    </div>
</body>
<script src="js/master.js"></script>
</html>