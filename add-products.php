<?php
include 'settings.php';
include 'db.php';

$number_product = $_POST['number_product'];
$name_product = $_POST['name_product'];
$count_product = $_POST['count_product'];
$price_product = $_POST['price_product'];
$detalis_product = $_POST['detalis_product'];

$database = new mysqli ('localhost', 'root', '', 'front');

$sql = "INSERT INTO product(number_product,name_product,count_product,price_product,detalis_product)
        VALUES ('$number_product','$name_product','$count_product','$price_product','$detalis_product')";

$result = $database-> query($sql);

$database -> close();

echo "Ok uploaded !";



?>
