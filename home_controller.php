<?php

include 'settings.php';
include 'db.php';


$dbc = new db($dbHost, $dbUser, $dbPass, $dbName);
$sql = "SELECT * FROM product ORDER BY price_pro asc";
$result = $dbc -> query($sql);

$productListCheapest = $result -> fetchAll();

include 'home_view.php';



// if(isset($_POST['submit']))
// {
//     $username = $_POST['username'];
//     $password = $_POST['password_user'];
//     $phone =   $_POST['phone_user'];
//     $fullname = $_POST['fullname_user'];
//     $address = $_POST['address_user'];
//
//
//     $sql = "UPDATE user SET
//     username = ? ,
//     password_user = ? ,
//     phone_user = ? ,
//     fullname_user = ? ,
//     address_user = ?
//     WHERE id = ?";
//
//     $res = $dbc -> query($sql, $username , $password , $phone , $fullname , $address , $uid);
//
//     echo 'اطلاعات با موفقیت ثبت شد' ;
// }
//
// else
// {
//
//   $sql = "SELECT * FROM user WHERE id = ?";
//
//   $res = $dbc -> query($sql,$uid);
//   $user = $res -> fetchArray();
//
//     $username_a = $user['username'];
//     $password_a = $user['password_user'];
//     $phone_a = $user['phone_user'];
//     $fullname_a = $user['fullname_user'];
//     $address_a = $user['address_user'];
//
//   include 'updateUser_view.php';
//
// }

$dbc -> close();

// echo "Success OK !!!"



?>
