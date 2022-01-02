<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM product";
$result = $dbc -> query($sql);
$productSelected = $result -> fetchAll();

include 'productList_view.php';

$dbc -> close();




include "detailProduct_view.php";

?>