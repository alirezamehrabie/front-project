<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-add-user.css" type="text/css">
    <title>ثبت نام کاربران سایت</title>

    <!-- Clear inputs with Button page -->
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
            <h1>ثبت نام کاربران سایت</h1>
            <h3>وبسایت فروشگاه لوازم جانبی رایانه</h3>

            <form action="" method="post" id="myForm">
                <label for="user_name">نام کاربری خود را وارد کنید</label>
                <input class="inputs" type="text" id="EnglishName" name="username_user">

                <label for="password_user">رمز عبور خود را وارد کنید </label>
                <input type="password" id="password_user" name="password_user">

                <label for="phone_user">تلفن همراه خود را وارد کنید</label>
                <input type="number" id="phone_user" name="phone_user" >

                <label for="fullname_user">نام و نام خانوادگی خود را وارد کنید<span></span></label>
                <input type="text" id="fullname_user" name="fullname_user">

				<label for="fullname_user">تعییم حالت کاربر</label>
				<input type="number" name="role_user" maxlength="1" min="0" max="1" placeholder="عادی: 0 "><br>

                <div class="btns">
                <button type="submit" name="submit">ثبت نام</button>
                <button type="button" onclick="myFunction()" >پاک کردن</button>
                </div>

            </form>

        </div>

        
    </div>
    <div class="footer"></div>

    
</body>
</html>