<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Location</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/master.css">
    <link rel="icon" href="img/e-warung.png">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
        type="text/javascript"></script>
  </head>
  <body>
  <?php include_once("navbar.php"); ?>
    <div class="container">
        <form method="post" action="complOrder.php"> 
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    Select location :
                </h3>
                    <div class="form-group">
                        <input type="text" id="searchmap" name="destination" placeholder="">
                        <div id="map-canvas"></div>
                    </div>    
                        <input type="submit" class="btn btn-success btn-block" value="Grab Your Food Now !">
                        </button>
                    
            </div>
            <div class="col-md-6">
                <h3>
                    Warung Lokasi Terdekat :
                </h3>
                <div class="carousel slide" id="carousel-33722">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-33722">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-33722">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-33722">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="Carousel Bootstrap First" src="img/warung1.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    Warung Bu Tatan
                                </h4>
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Second" src="img/warung2.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    Warung Ubed
                                </h4>
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Third" src="img/warung3.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    Warung Das
                                </h4>
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                    </div> <a class="left carousel-control" href="#carousel-33722" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-33722" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                
                <h3>
                    Detail Lokasi :
                </h3>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Tuliskan pesan anda kepada pengantar"></textarea>
                    </div> 
            </div>
        </form>
        </div>
    </div>


  </body>
</html>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script>
	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat: 27.72,
        	lng: 85.36
		},
		zoom:15
	});
	var marker = new google.maps.Marker({
		position: {
			lat: 27.72,
        	lng: 85.36
		},
		map: map,
		draggable: true
	});
	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
	google.maps.event.addListener(searchBox,'places_changed',function(){
		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;
		for(i=0; place=places[i];i++){
  			bounds.extend(place.geometry.location);
  			marker.setPosition(place.geometry.location); //set marker position new...
  		}
  		map.fitBounds(bounds);
  		map.setZoom(15);
	});
	google.maps.event.addListener(marker,'position_changed',function(){
		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();
		$('#lat').val(lat);
		$('#lng').val(lng);
	});
</script>