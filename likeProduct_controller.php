<?php

session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

// A. validation
$productId = $_GET['id'];
$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM likeproduct Where uid = ? AND productId = ?";
$result = $dbc -> query($sql, $uid, $productId);
$like = $result -> fetchArray();


if(isset($like['id'])) 
{
	$sql = "DELETE FROM likeproduct	WHERE id = ?";
	$result = $dbc -> query( $sql, $like['id']);
	echo "liked";
}
else
{
	$sql = "INSERT INTO likeProduct(uid, productId) VALUES(?, ?)";
	$result = $dbc -> query( $sql, $uid, $productId );
	echo "disliked";
}

$dbc -> close();

?>