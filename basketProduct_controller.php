<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';


if(! Authentication :: check())
{
	echo 'با هیچ حساب کاربری وارد نشده اید';
	exit;
}

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM basketProduct
		WHERE uid = ? AND productId = ?";
$result = $dbc -> query($sql, $uid, $productId);
$like = $result -> fetchArray();


if(isset($like['id'])) 
{
	$sql = "DELETE FROM basketProduct WHERE id = ?";
	$result = $dbc -> query( $sql, $like['id']);
	echo "از سبد خرید حذف شد";
}
else
{
	$sql = "INSERT INTO basketProduct(uid, productId) VALUES(?, ?)";
	$result = $dbc -> query( $sql, $uid, $productId );
	echo "به سبد خرید افزوده شد";
}

$dbc -> close();

?>