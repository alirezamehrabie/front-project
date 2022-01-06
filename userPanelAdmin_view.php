<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
    <link rel="stylesheet" href="userPanelAdmin_style.css" type="text/css">
    <title>پنل کاربران مدیر | ونوس</title>
    </head>
	
<body>
	   
	<div class="wrapper">

		<div class="section">
			<div class="top_navbar">
				<div class="hamburger">
					<a href="#"><i class="fas fa-bars"></i></a>
				</div>
			</div>
		</div>


		<div class="sidebar">

			<div class="profile">
				<h2>ونوس</h2>
				<h3>مدیر: <?php echo $user['fullname_user']; ?></h3>   
				<p>پنل کاربران مدیر </p>
			</div>


			<ul>
				<li>     
					<a href="index.php" class="active">
						<span class="icon"><i class="fad fa-home-lg-alt"></i></span>  
						<span class="item">صفحه اصلی</span>
					</a>	
				</li>

<!--
				<li>
					<a href="#">
						<span class="icon"><i class="fad fa-desktop"></i></span>
						<span class="item">داشبورد</span>
					</a>
				</li>
-->

				<li>
					<a href="#">
						<span class="icon"><i class="fad fa-bookmark"></i></span>
						<span class="item">لیست ذخیره شده ها</span>
					</a>
				</li>

				<li>
					<a href="#">
						<span class="icon"><i class="fad fa-heart"></i></span>
						<span class="item">لیست علاقه مندی ها</span>
					</a>
				</li>

				<li>
					<a href="panel/contactListTable_controller.php">
						<span class="icon"><i class="fad fa-envelope"></i></span>
						<span class="item">لیست پیام های ارسالی</span>
					</a>
				</li>	

				<li>
					<a href="panel/userListTable_controller.php">
						<span class="icon"><i class="fad fa-users"></i></span>
						<span class="item">بخش مدیریت کاربران</span>
					</a>
				</li>
				
				<li>
					<a href="addUser_controller.php">
						<span class="icon"><i class="fad fa-users"></i></span>
						<span class="item">ثبت نام کاربر جدید</span>
					</a>
				</li>


				<li>
					<a href="panel/productListTable_controller.php">
						<span class="icon"><i class="fad fa-box-full"></i></span>   
						<span class="item">بخش مدیریت محصولات</span>
					</a>  
				</li>


				<li>		
					<a href="basketProductListTable_controller.php?id=<?php echo Authentication :: uid() ?>">     
						<span class="icon"><i class="fad fa-shopping-basket"></i></span>       
						<span class="item">سبد خرید من</span>	
					</a>
				</li>
				
				
				<li>		
					<a href="addProduct_controller.php">     
						<span class="icon"><i class="fad fa-portrait"></i></span>       
						<span class="item">افزودن محصول جدید</span>	
					</a>
				</li>

				<li>	
					<a href="#"> 
						<span class="icon"><i class="fad fa-sign-out-alt"></i></span>  
						<span class="item">خروج از حساب کاربری</span>	
					</a>
				</li>
			</ul> 
			
		</div>  
	</div>
</body>
	
<script src="assets/js/userPanel.js"></script>
	
</html>


