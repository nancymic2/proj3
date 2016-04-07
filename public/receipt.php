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