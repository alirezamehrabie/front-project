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
		<img src="../assets/images/upload/banner/UsersBanner.png" alt="بنر کاربران">
		
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
		
		<a href="../userPanelAdmin_controller.php"><div class="back">بازگشت به پنل کاربری</div></a>
		
	</div>
</body>
</html>
