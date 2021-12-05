<?php



// Connect to Database
$dbc = new mysqli ('localhost', 'root', '', 'front');

// Query insert
$sql = "INSERT INTO message(name_user, lastname_user, email_user, phone_user, text_user)
VALUES ('{$_POST['name_user']}','{$_POST['lastname_user']}','{$_POST['email_user']}', '{$_POST['phone_user']}', '{$_POST['text_user']}')";

//Run Query
$result = $dbc -> query($sql);

//connection Close
$dbc -> close();
echo "اطلاعات با موفقیت به ثبت رسید";
?>