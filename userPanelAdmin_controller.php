<?php

session_start();

	include 'settings.php';
	include 'db.php';
	include 'security.php';
	include 'functions.php';


if( ! Authentication :: check())
{
	echo 'اجازه دسترسی به پنل را ندارید';
	exit;
}


if(isset($_POST['submit']))
{

	
	
	$dbc = new db($dbHost, $dbUser , $dbPass, $dbName);
	$sql = "SELECT * FROM user WHERE username_user = ?";
	$result = $dbc -> query($sql , $_POST['username_user']);
	$user = $result -> fetchArray();
	if(isset($user['password_user']) && $user['password_user'] == $_POST['password_user'])
	{
		
		$uid = $user['id'];
		Authentication :: login($uid);
	
			
		$role = $user['role_user'];
		Authorization :: role($role);
		
		//redirect to dashbord
		redirect("updateUser_controller.php?id={$_SESSION['uid']}");
	
	
	}
	else
	{
		echo "رمز عبور صحیح نمی باشد";
	}
	
	
}


include 'userPanelAdmin_view.php';
?>