<!doctype html>
<html lang="en" dir="ltr">
  <head>
   <script src="js/myjs.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading with Penny</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

  </head>
<body>

<img id="Imagemap" src="images/running-car-smaller2000Plain.gif" border="0" width="2000" height="436" orgWidth="2000" orgHeight="436" usemap="#image-maps-2016-04-02-112907" alt="" />


<map name="image-maps-2016-04-02-112907" id="ImageMapsCom-image-maps-2016-04-02-112907">


<area  alt="police" title="police" href="#" shape="rect" coords="186,193,285,360" style="outline:none;" target="_self"     onClick="showTutorial('Police', 'blank', '250px', '310px', '#0E2DB8', 'images/badge.png', 'images/siren.mp3')"  
            />



<area  alt="plane" title="" href="#" shape="rect" coords="946,137,1903,228" style="outline:none;" target="_self"  onClick="showTutorial('Plane', 'blank', '250px', '610px', '#0E2DB8', 'images/plane.png', 'images/plane.mp3')"  
            />


<area  alt="store" title="" href="#" shape="rect" coords="1048,200,1218,342" style="outline:none;" target="_self"     />


<area  alt="gas" title="" href="#" shape="rect" coords="404,210,539,352" style="outline:none;" target="_self"   onClick="showTutorial('Gas', 'blank', '250px', '510px', '#0E2DB8', 'images/gas.png', 'images/beep.mp3')"  
            />



<area  alt="doctor" title="" href="#" shape="rect" coords="10,169,155,331" style="outline:none;" target="_self"      onClick="showTutorial('Hospital', 'blank', '250px', '210px', '#0E2DB8', 'images/hospital.png', 'images/hospital.mp3')"  
            />


<area  alt="clouds" title="" href="#" shape="rect" coords="1363,145,1593,246" style="outline:none;" target="_self"     />

<area  alt="mountains" title="" href="#" shape="rect" coords="1628,182,1741,279" style="outline:none;" target="_self"     />

<area  alt="sun" title="" href="#" shape="rect" coords="1910,154,1997,224" style="outline:none;" target="_self"     />

</map>



<nav class="medium-12 columns" id="topnav" >
<ul class="vertical medium-horizontal menu">
  <li><a href="index.html"><img src="images/houseMenu2.png"></a></li>
  <li><a href="cars.html"><img src="images/carMenu.png"></a></li>
  <!--<li><a href="#"><img src="images/flipflopsMenu.png"></a></li>
  <li><a href="#"><img src="images/noteMenu.png"></a></li>
  <li><a href="#"><img src="images/bedMenu.png"></a></li>
  <li><a href="#"><img src="images/volleyMenu.png"></a></li>
  <li><a href="#"><img src="images/sailMenu.png"></a></li>
  <li><a href="shop.html"><img src="images/momMenu.png"></a></li>
  <li><a href="shop.html"><img src="images/familyMenu.png"></a></li>-->
  <li><a href="shop.html"><img src="images/shopMenu.png"></a></li>
</ul>
</nav>
	<?php


$name = $_POST['name'];
$email = $_POST['email'];

echo '<h2>Thank You!</h2>';
echo 'Thanks ';
echo $name;
echo $email;
echo '<br>';
$order=rand()*10;
echo 'your order number is ';
echo $order;


?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>

   <script src="js/myjs.js"></script>
</body>
</html>