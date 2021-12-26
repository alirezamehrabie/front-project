<?php
session_start();

include 'settings.php';
include 'db.php';
include 'security.php';
include 'functions.php';

if(isset($_POST['submit']))
{
	//پردازش اطلاعات ورود به حساب
	
	
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
		
		if(Authorization :: role_user() == 0)
		redirect("userPanel_controller.php?id={$user['id']}");
		
		
		if(Authorization :: role_user() == 1)
		redirect("userPanelAdmin_controller.php?id={$user['id']}");
		
		
	
	
	}
	else
	{
		echo "رمز عبور صحیح نمی باشد";
	}
}
else
{
	include 'loginPanel_view.php';
}


?>