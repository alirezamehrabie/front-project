<?php

session_start();

include '../settings.php';
include '../db.php';
include '../security.php';

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM product
		WHERE id = ?";
$result = $dbc -> query($sql, $productId);
$removeProduct = $result -> fetchArray();


if(isset($removeProduct['id'])) 
{
	$sql = "DELETE FROM product	WHERE id = ?";
	$result = $dbc -> query( $sql, $removeProduct['id']);
	echo "محصول حذف شد";
}
else
{
	echo "خطا! محصولی وجود ندارد";
}

$dbc -> close();

?>
