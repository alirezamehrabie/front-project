<?php

session_start();
include '../settings.php';
include '../db.php';
include '../security.php';


if(! Authentication :: check())
{
	echo 'به لیست پیام ها نمی توانید دسترسی داشته باشید';
	exit;
}

$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM contact";
$result = $dbc -> query($sql);
$contactList = $result -> fetchAll();



  include 'contactListTable_view.php';



$dbc -> close();

// echo "Success OK !!!"



?>
