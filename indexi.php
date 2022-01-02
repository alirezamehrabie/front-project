<?php
session_start();

include 'settings.php';
include 'db.php';
include 'security.php';


$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM product ORDER BY price_pro asc";
$result = $dbc -> query($sql);

$productListCheapest = $result -> fetchAll();

include 'index_view.php';


$dbc -> close();





?>
