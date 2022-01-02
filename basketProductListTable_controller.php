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

//Select Basket Product
$sql = "SELECT * FROM basketProduct Where uid = ?";
$result = $dbc -> query($sql, Authentication :: uid());
$resultBasket = $result -> fetchAll();


//Select User
$sql_user = "Select * From user where id = {$_SESSION['uid']}";
$result_user = $dbc -> query($sql_user);
$resultUser = $result_user -> fetchArray();




include 'basketProductListTable_view.php';

?>