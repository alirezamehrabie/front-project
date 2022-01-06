<?php

session_start();
include '../settings.php';
include '../db.php';
include '../security.php';


if(! Authentication :: check())
{
	echo 'به لیست کاربران فروشگاه نمی توانید دسترسی داشته باشید';
	exit;
}

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM user";
$result = $dbc -> query($sql);
$userList = $result -> fetchAll();

include 'userListTable_view.php';

$dbc -> close();

?>
