<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userListTable_style.css" type="text/css">
    <title>مدیریت کاربران | پنل مدیر</title>
</head>
<body>
    <div class="container">

        <div class="body-titr">
             <h1>کاربران فروشگاه</h1>
        </div>

        <div class="container-product">

            <div class="grid-container">

              <table class="datatable">
                <tr>
                  <th>شماره</th>
                  <th>نام کاربری</th>
				  <th>رمز عبور</th>
                  <th>تلفن همراه</th>
                  <th>نام و نام خانوادگی</th>
                  <th>امکانات</th>
                </tr>

                  <?php
                   foreach ($userList as $user){
                      include '..\template\userTableItem.php';
                   }
                  ?>

              </table>


            </div>
        </div>
    </div>

</body>
</html>
