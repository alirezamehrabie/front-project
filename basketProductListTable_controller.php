<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';


if(! Authentication :: check())
{
	echo 'امکان دسترسی به سبد خرید را ندارید';
	exit;
}


//connect database
$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

//Select Basket
$sql = "SELECT * FROM basketProduct Where uid = ?";
$result = $dbc -> query($sql, Authentication :: uid());
$resultBasket = $result -> fetchAll();




include 'basketProductListTable_view.php';

?>