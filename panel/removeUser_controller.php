<?php

session_start();
include '../settings.php';
include '../db.php';
include '../security.php';

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM user
		WHERE id = ?";
$result = $dbc -> query($sql, $productId);
$removeUser = $result -> fetchArray();


if(isset($removeUser['id'])) 
{
	$sql = "DELETE FROM user WHERE id = ?";
	$result = $dbc -> query( $sql, $removeUser['id']);
	echo "کاربر حذف شد";
}
else
{
	echo "خطا! کاربری وجود ندارد";
}

$dbc -> close();

?>
