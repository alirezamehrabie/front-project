<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';



if( ! Authentication :: check())
{
	echo 'اجازۀ دسترسی ندارید';
	exit;
}


$uid = $_GET['id'];
$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);

if(isset($_POST['submit']) && $_SESSION['uid'] == $uid)
{
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];
    $phone =   $_POST['phone_user'];
    $fullname = $_POST['fullname_user'];
    


    $sql = "UPDATE user SET
    username_user = ? ,
    password_user = ? ,
    phone_user = ? ,
    fullname_user = ? 
    WHERE id = ?";

    $res = $dbc -> query($sql, $username , $password , $phone , $fullname , $uid);

    echo 'اطلاعات با موفقیت ثبت شد' ;
}

else
{
  $sql = "SELECT * FROM user WHERE id = ?";

  $res = $dbc -> query($sql,$uid);
  $user = $res -> fetchArray();

    $username_a = $user['username_user'];
    $password_a = $user['password_user'];
    $phone_a = $user['phone_user'];
    $fullname_a = $user['fullname_user'];

  include 'updateUser_view.php';

}

$dbc -> close();

// echo "Success OK !!!"



?>
