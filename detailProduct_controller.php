<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';

$comment_uid = Authentication :: uid();
$comment_productId = $_GET['id'];
$_SESSION['productId'] = $comment_productId;


$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM product Where id = ? ";
$result = $dbc -> query($sql, $comment_productId);
$productSelected = $result -> fetchArray();


include "detailProduct_view.php";

$dbc -> close();


?>