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
    <a href="viewCart.php" class="act-btn">
            🛒
        </a>
	<div class="container">
		<div class="page-header">
			<h1>Specify Your Order</h1>
		</div>
            <br>
            <form method="post" action="complOrder.php">
                <input type="hidden" name="destination" value="">
                <input type="submit" value="Finish Order" style="float:right;">
            </form>
                <div class="tabs">    
                <div class="tab">
                    <input type="radio" id="tab-1" name="tab-group-1" checked>
                    <label for="tab-1">Appetizer</label>

                    <div class="content">
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/ODADING.jpg> </div>
                                <div class='foodname' id='Odading'>
                                    <div class='fooddet'>
                                        Odading <br> 
                                        <div class='fooddesc'> Roti goreng dengan rasa manis yang menggigit di lidah <br> Rp.5.000</div>
                                <div class='choosefood'>
                                    <form method="post" action=\"completeOrder.php?Username=$username\">
                                        <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/gehu.jpg> </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Gehu <br> 
                                        <div class='fooddesc'> Tahu goreng dengan isi tauge dan wortel yang ramai <br> Rp.5.000</div>
                                <div class='choosefood'>
                                    <form method="post" action=\"completeOrder.php?Username=$username\">
                                        <input type="number" value="0" min="0" style="float:right; width: 100px;">
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/mendoan.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Tempe Mendoan <br> 
                                        <div class='fooddesc'> Tempe mendoan goreng dibalut adonan gurih <br> Rp.5.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right; width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/menjes.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Menjes <br> 
                                        <div class='fooddesc'> Ampas tahu yang diolah dan digoreng dengan balutan adonan gurih <br> Rp.4.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/kolgoreng.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Kol Goreng <br> 
                                        <div class='fooddesc'> Kol yang digoreng hingga terkaramelisasi <br> Rp.2.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/martabak.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Martabak <br> 
                                        <div class='fooddesc'> Martabak asin khas Indonesia <br> Rp.7.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/lumpia.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Lumpia <br> 
                                        <div class='fooddesc'> Lumpia isi rebung khas semarang yang legit <br> Rp.7.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="tab">
                    <input type="radio" id="tab-2" name="tab-group-1">
                    <label for="tab-2">Main Course</label>

                    <div class="content">
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/nasiputih.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Nasi Putih <br> 
                                        <div class='fooddesc'> Nasi putih punel asli purwakarta <br> Rp.3.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/nasigorengpete.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Nasi goreng ikan teri + pete <br> 
                                        <div class='fooddesc'> Nasi goreng khas Indonesia lengkap dengan ikan teri, pete, dan telor mata sapi <br> Rp.15.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/sirloinsteak.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Sirloin Steak with potatoes <br> 
                                        <div class='fooddesc'> steak sirloin dengan daging sapi Australia lengkap bersama baked potato <br> Rp.65.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/chickencordonbleu.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Ayam Cordon Bleu <br> 
                                        <div class='fooddesc'> daging ayam cincang isi keju mozzarella digoreng dengan tepung roti <br> Rp.50.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/ayambakar.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Ayam bakar <br> 
                                        <div class='fooddesc'> ayam bakar dengan bumbu kecap yang asin dan gurih <br> Rp.20.000 </div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/nasibebek.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Bebek Goreng <br> 
                                        <div class='fooddesc'> Bebek goreng ala kaki lima dengan kualitas bintang lima <br> Rp.25.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/sotoayam.png> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Soto Ayam <br> 
                                        <div class='fooddesc'> Soto ayam khas Kediri yang tidak dapat anda temui di mana pun <br> Rp.20.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div> 
                </div>

                 <div class="tab">
                    <input type="radio" id="tab-3" name="tab-group-1">
                    <label for="tab-3">Drink</label>

                    <div class="content">
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/esteh.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Es Teh Manis <br> 
                                        <div class='fooddesc'> Es teh dengan daun teh yang diambil dari pucuk pohonnya <br> Rp.3.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/esjeruk.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Es Jeruk <br> 
                                        <div class='fooddesc'> Es Jeruk dengan perasan jeruk yang dipetik kemarin <br> Rp.3.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/wedangjahe.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Wedang Jahe <br> 
                                        <div class='fooddesc'> Wedang jahe hangat yang cocok diminum saat cuaca dingin <br> Rp.5.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/kopisusu.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Kopi Susu <br> 
                                        <div class='fooddesc'> Kopi susu dengan biji kopi yang diolah sendiri lengkap dengan susu lembang <br> Rp.6.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/sodagembira.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Es Soda Gembira <br> 
                                        <div class='fooddesc'> Es Soda lengkap dengan sirup stroberi dan susu kental manis <br> Rp.9.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/eskelapa.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Es Kelapa Muda <br> 
                                        <div class='fooddesc'> Es Kelapa muda lengkap dengan sirup cocopandan <br> Rp.9.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                    </div> 
                </div>
                    
                 <div class="tab">
                    <input type="radio" id="tab-4" name="tab-group-1">
                    <label for="tab-4">Dessert</label>

                    <div class="content">
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/escampur.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Es Campur <br> 
                                        <div class='fooddesc'> jelly, nata de coco, mutiara, kolang-kaling, roti, dan rumput laut yang disiram dengan gula jawa, santan, dan es serut <br> Rp.11.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/terangbulan.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Terangbulan <br> 
                                        <div class='fooddesc'> martabak manis kalau di sini bilangnya <br> Rp.5.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/ronde.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Ronde <br> 
                                        <div class='fooddesc'> Bola-bola tepung ketan isi kacang dengan kuah jahe lengkap dengan kacang tanah sangrai dan nata de coco <br> Rp.7.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/pisangkeju.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Pisang Keju <br> 
                                        <div class='fooddesc'> Pisang panggang dengan taburan keju cheddar dan misis <br> Rp.8.000 </div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/mariyam.jpg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Roti Mariyam <br> 
                                        <div class='fooddesc'> Roti mariyam khas arab dengan topping keju cheddar dan misis <br> Rp.10.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='dispfood'>
                            <div class='foodimg'>
                                <img class='food' src=img/bubur.jpeg> 
                            </div>
                                <div class='foodname' id='gehu'>
                                    <div class='fooddet'>
                                        Bubur Madura <br> 
                                        <div class='fooddesc'> Bubur isi grendul, bubur sumsum, ketan hitam, dan mutiara dengan siraman gula jawa cair <br> Rp.10.000</div>
                                        <div class='choosefood'>
                                            <form method="post" action=\"completeOrder.php?Username=$username\">
                                                <input type="number" value="0" min="0" style="float:right;width: 100px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
</body>
</html>