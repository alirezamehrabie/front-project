<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$basketId = $_GET['id'];
var_dump($basketId);

$uid = Authentication :: uid();

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql = "Delete From basketProduct WHERE productId = ?";
$result = $dbc -> query( $sql, $_GET['id']);
echo "محصول از داخل سبد خرید شما حذف شد";





?>