<?php

session_start();
include '../settings.php';
include '../db.php';
include '../security.php';

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM contact
		WHERE id = ?";
$result = $dbc -> query($sql, $productId);
$removeContact = $result -> fetchArray();


if(isset($removeContact['id'])) 
{
	$sql = "DELETE FROM contact	WHERE id = ?";
	$result = $dbc -> query( $sql, $removeContact['id']);
	echo "پیام کاربر حذف شد";
}
else
{
	echo "خطا! پیامی وجود ندارد";
}

$dbc -> close();

?>
