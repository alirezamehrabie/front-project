<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-add-user.css" type="text/css">
    <title>ویرایش اطلاعات کاربران سایت</title>


    <script>
        function myFunction()
        {
            document.getElementById("myForm").reset();
        }
     </script>

</head>
<body>
    <div class="container">
        <div class="page-add-user">
            <h1>ویرایش کاربران سایت</h1>
            <h3>وبسایت فروشگاه لوازم جانبی رایانه</h3>

                <form action="" method="post" id="myForm">
                <label for="user_name">نام کاربری خود را ویرایش کنید</label>
                <input class="inputs" type="text" id="user_name" name="username_user" value="<?php echo $username_a; ?>">

                <label for="password_user">رمز عبور خود را ویرایش کنید </label>
                <input type="password" id="password_user" name="password_user" value="<?php echo $password_a; ?>">

                <label for="phone_user">تلفن همراه خود را ویرایش کنید</label>
                <input type="number" id="phone_user" name="phone_user" value="<?php echo $phone_a; ?>">

                <label for="fullname_user">نام و نام خانوادگی خود را ویرایش کنید<span></span></label>
                <input type="text" id="fullname_user" name="fullname_user" value="<?php echo $fullname_a; ?>">


                <div class="btns">
                <button type="submit" name="submit">ثبت ویرایش</button>
                <button type="button" onclick="myFunction()" >پاک کردن</button>
                </div>

              </form>

        </div>


    </div>
    <div class="footer"></div>


</body>
</html>
