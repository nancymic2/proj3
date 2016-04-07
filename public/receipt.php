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