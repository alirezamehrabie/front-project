<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM bookmarkProduct
		WHERE uid = ? AND productId = ?";
$result = $dbc -> query($sql, $uid, $productId);
$bookmark = $result -> fetchArray();


if(isset($bookmark['id'])) 
{
	$sql = "DELETE FROM bookmarkProduct	WHERE id = ?";
	$result = $dbc -> query( $sql, $bookmark['id']);
	echo "disbookmarked";
}
else
{
	$sql = "INSERT INTO bookmarkProduct(uid, productId) VALUES(?, ?)";
	$result = $dbc -> query( $sql, $uid, $productId );
	echo "bookmarked";
}

$dbc -> close();

?>