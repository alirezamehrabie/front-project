<?php

session_start();

	include 'settings.php';
	include 'db.php';
	include 'security.php';
	include 'functions.php';


if(!Authentication :: check())
{
	echo 'اجازه دسترسی به پنل را ندارید';
	exit;
}

	$dbc = new db($dbHost, $dbUser , $dbPass, $dbName);
	$sql = "SELECT * FROM user WHERE id = ?";
	$result = $dbc -> query($sql , $_GET['id']);
	$user = $result -> fetchArray();
	if($_SESSION['uid'] == $_GET['id'])
	{
		
		include 'userPanel_view.php';

	
//		redirect("updateUser_controller.php?id={$_SESSION['uid']}");
	
	
	}
	else
	{
		echo "رمز عبور صحیح نمی باشد";
	}
	



?>