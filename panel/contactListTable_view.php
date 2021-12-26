<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactListTable_style.css" type="text/css">
    <title>مدیریت پیام | پنل مدیر</title>
</head>
<body>
    <div class="container">

        <div class="body-titr">
             <h1>پیام بازدیدکنندگان و کاربران فروشگاه</h1>
        </div>

        <div class="container-product">

            <div class="grid-container">

              <table class="datatable">
                <tr>
                  <th>شماره</th>
                  <th>نام خانوادگی</th>
                  <th>نام</th>
                  <th>پست الکترونیک</th>
                  <th>تلفن همراه</th>
                  <th>متن پیام</th>
                  <th>امکانات</th>
                </tr>

                  <?php
                   foreach ($contactList as $contact){
                      include '..\template\contactTableItem.php';
                   }
                  ?>

              </table>


            </div>
        </div>
    </div>

</body>
</html>
