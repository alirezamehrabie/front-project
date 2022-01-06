<?php

session_start();

	include 'settings.php';
	include 'db.php';
	include 'security.php';
	include 'functions.php';

	$dbc = new db($dbHost, $dbUser , $dbPass, $dbName);

include 'contact_view.php';


// Connect to Database
$dbc = new mysqli ('localhost', 'root', '', 'front');

// Query insert
$sql = "INSERT INTO contact(lastname_c, firstname_c, email_c, phone_c, text_c)
VALUES ('{$_POST['lastname_user']}','{$_POST['firstname_user']}','{$_POST['email_user']}', '{$_POST['phone_user']}', '{$_POST['text_user']}')";

//Run Query
$result = $dbc -> query($sql);
echo "پیام شما ارسال شد";
//connection Close
$dbc -> close();

?>