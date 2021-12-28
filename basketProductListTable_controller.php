<?php

session_start();
include 'settings.php';
include 'db.php';
include 'security.php';


if(! Authentication :: check())
{
	echo 'به لیست محصولات فروشگاه نمی توانید دسترسی داشته باشید';
	exit;
}

//connect database
$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql = "SELECT * FROM basketProduct Where uid = ?";
$result = $dbc -> query($sql, $_SESSION['uid']);
$resultBasket = $result -> fetchAll();


include 'basketProductListTable_view.php';

?>