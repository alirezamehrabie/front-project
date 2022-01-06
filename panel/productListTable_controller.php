<?php

session_start();
include '../settings.php';
include '../db.php';
include '../security.php';


if(! Authentication :: check())
{
	echo 'به لیست محصولات فروشگاه نمی توانید دسترسی داشته باشید';
	exit;
}

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM product";
$result = $dbc -> query($sql);
$productList = $result -> fetchAll();



  include 'productListTable_view.php';



$dbc -> close();





?>
