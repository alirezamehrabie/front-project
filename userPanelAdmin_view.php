<!DOCTYPE html>
<html lang="fa">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userPanelAdmin_style.css" type="text/css">
	<link rel="stylesheet" href="fonts/fonts.css" type="text/css">
    <title>پنل کاربری مدیران | ونوس</title>
    </head>
	
<body>
     
<div class="wrapper">
    
	<div class="section">
		<div class="top_navbar">
			<div class="hamburger">
				<a href="#">
					<i class="fas fa-bars"></i>
   			    </a>
			</div>
		</div>
    <!-- <div class="container">
      Lirure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum
    </div> -->
	</div>
  
        <div class="sidebar">
            <div class="profile">
				<h2>ونوس</h2>
                <h4>مدیر: <?php echo $user['fullname_user'] ?></h4>
                <p>پنل اختصاصی مدیران سایت</p>
            </div>
            <ul>
				
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">صفحه اصلی</span>
                    </a>
                </li>
				
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">داشبورد</span>
                    </a>
                </li>
				
                <li>
                    <a href="panel/userListTable_controller.php">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="item">کاربران سایت</span>
                    </a>
                </li>
				
                <li>
                    <a href="panel/contactListTable_controller.php">
                        <span class="icon"><i class="far fa-envelope-open"></i></span>
                        <span class="item">لیست پیام ها</span>
                    </a>
                </li>
				
                <li>
                    <a href="panel/productListTable_controller.php">
                        <span class="icon"><i class="fa fa-th"></i></span>
                        <span class="item">لیست محصولات</span>
                    </a>
                </li>
				
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">گزارشات</span>
                    </a>
                </li>
				
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">مشخصات مدیر</span>
                    </a>
                </li>
				
                <li>	
					<a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">تنظیمات</span>
					</a>
                </li>
				
            </ul>
        </div>  
    </div>
</body>
	
<script src="assets/js/userPanel.js"></script>
	
</html>


