<?php


include 'settings.php';
include 'db.php';


$dbc = new db ($dbHost,$dbUser,$dbPass,$dbName);


if(isset($_POST['submit']))
{
	$sql = "INSERT INTO user(username_user,password_user,phone_user,fullname_user,role_user) VALUES (?, ?, ?, ?, ?)";
    $result = $dbc -> query($sql,$_POST['username_user'],
    $_POST['password_user'],
    $_POST['phone_user'],
    $_POST['fullname_user'],
    $_POST['role_user']);
    $dbc -> close();
	echo 'کاربر با موفقیت ثبت شد';	
}

else
{
	include 'addUser_view.php';
}


?>