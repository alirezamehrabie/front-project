<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';

$stateInput = "";
$noteUsername = "";

if(!(Authentication :: check()))
{
	$stateInput = "disabled";
}

if(!(Authorization :: check()))
   {
	 $role = 3;
	 Authorization :: role($role);
   }

if(Authorization :: role_user() == 2 || Authorization :: role_user() == 3)
{
	$stateInput = "disabled";
}


/*Connect to Database*/
$dbc = new db ($dbHost,$dbUser,$dbPass,$dbName);

if(isset($_POST['submit']))
{
	if(empty($_POST['username_user']))
	{
		echo "نام کاربری شما وارد نشده است";
		exit();
	}
	
	/*Get Input Data*/
	$userName = $_POST['username_user'];
	$passWord = $_POST['password_user'];
	$phoneNumber = $_POST['phone_user'];
	$fullName = $_POST['fullname_user'];
	
	
	
	if(empty($_POST['role_user']))
	{
		$roleUser = 3;
		/*Insert to Table User*/
		$sql = "Insert Into user(username_user,password_user,phone_user,fullname_user,role_user) VALUES (?, ?, ?, ?, ?)";
		$result = $dbc -> query($sql, $userName, $passWord, $phoneNumber, $fullName, $roleUser);
		$dbc -> close();
		echo 'کاربر با موفقیت ثبت شد';
	}
		if(!(empty($_POST['role_user'])))
	{
		$roleUser = $_POST['role_user'];
		/*Insert to Table User*/
		$sql = "Insert Into user(username_user,password_user,phone_user,fullname_user,role_user) VALUES (?, ?, ?, ?, ?)";
		$result = $dbc -> query($sql, $userName, $passWord, $phoneNumber, $fullName, $roleUser);
		$dbc -> close();
		include 'messages\messageAdduser.php';
	}
}

else
{
	include 'addUser_view.php';
}

?>