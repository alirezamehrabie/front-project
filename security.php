<?php


class Authentication
{
	 static function login($uid)
	{
		$_SESSION['uid'] = $uid;
		//$_SESSION['authenticated'] = true;
	}
	
	static function check()
	{
		return isset($_SESSION['uid']);
	}
	
	static function uid()
	{
		return $_SESSION['uid'];
	}
	
	static function logout()
	{
		unset($_SESSION['uid']);
	}
}


class Authorization
{
	static function role($role)
	{
		$_SESSION['role_user'] = $role;
	}
	
	static function check()
	{
		return isset($_SESSION['role_user']);
	}
	
	static function role_user()
	{
		return $_SESSION['role_user'];
	}
}


class Accounting
{
	
}


?>