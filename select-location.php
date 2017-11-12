<!DOCTYPE html>
<html>
<head>
	<title>Menu - e-Warung</title>
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
            <h2>Select Location :</h2>
        </div>

        <div class="selectlocation">
                <div class="locationbutton">  
                    <form>
                    <input type="text" name="search" placeholder="Search..">
                    </form>     
                </div>
                <div class="locationbutton">
                    <div class="gpsbutton">  
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
        </div> 

    </div>
    
    <div class="container">
        <div class="nearwar">
            <div class="map">
                <div class="empty"></div>
                <div class="subbut"><a href="konfirmasi-pesanan.php" class="confloc">Get your Food now !</a></div>
            </div>
            <div class="map"></div>
        </div>
    </div>
    
</body>
</html>
