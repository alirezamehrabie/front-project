<?php

include ("settings.php");
include ("db.php");

$dbc = new db ($dbHost,$dbUser,$dbPass,$dbName);

$sql = "INSERT INTO user(username,password_user,phone_user,fullname_user,address_user) VALUES (?, ?, ?, ?, ?)";

$res = $dbc -> query($sql,$_POST['username'],
$_POST['password_user'],
$_POST['phone_user'],
$_POST['fullname_user'],
$_POST['address_user']);

$dbc -> close();

echo "Success OK !!!"

?>