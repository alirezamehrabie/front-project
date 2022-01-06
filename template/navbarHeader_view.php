
<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="navbarHeader_style.css" type="text/css">
</head>

<body>
	<header>
		<div class="container">
			<input type="checkbox" name="" id="check">
			
			<div class="logo-contaner">
				<img draggable="false" src="../assets/images/upload/home/icon-header.png" alt="لوگو">
				<h3 class="logo">ونوس</h3>
			</div>
			
			<div class="nav-btn">
				<div class="nav-links">
					<ul>
						<li class="nav-link" style="--i: .6s">
							<a href="#">خانه</a>
						</li>
						
						<li class="nav-link" style="--i: 0.85s" >
							<a href="#">فهرست<i class="fas fa-caret-down"></i></a>
							
							<div class="dropdown">
								<ul>
									<li class="dropdown-link">
										<a href="productList_controller.php">کاتالوگ محصولات</a>
									</li>
									<li class="dropdown-link">
									<a href="basketProductListTable_controller.php?id=<?php echo Authentication :: uid() ?>">مشاهده سبد خرید</a>
									</li>
									<li class="dropdown-link">
										<a href="#">شاخه محصولات<i class="fas fa-caret-down"></i></a>
							<div class="dropdown second">
								<ul>
									<li class="dropdown-link">
										<a href="#">لوازم جانبی لپ تاپ</a>
									</li>
									<li class="dropdown-link">
										<a href="#">لوازم جانبی موبایل</a>
									</li>
									<li class="dropdown-link">
										<a href="#">لوازم جانبی کامپیوتر</a>
									</li>
									
									</li>
									<div class="arrow"></div>
								</ul>
							</div>
										
									</li>
									<li class="dropdown-link">
										<a href="#">گالری تصاویر</a>
									</li>
									<div class="arrow"></div>
								</ul>
							</div>
							
						</li>
						
						
						
						<li class="nav-link" style="--i: 1.1s">
							<a href="#">خدمات<i class="fas fa-caret-down"></i></a>
							
							<div class="dropdown">
								<ul>
									<li class="dropdown-link">
										<a href="#">پروفایل من</a>
									</li>
									<li class="dropdown-link">
										<a href="#">آموزش</a>
									</li>

									<li class="dropdown-link">
										<a href="#">درباره ما</a>
									</li>
									
									<li class="dropdown-link">
										<a href="loginPanel_controller.php">پنل کاربر | مدیر</a>
									</li>
									
									<div class="arrow"></div>
								</ul>
							</div>
							
						</li>
						<li class="nav-link" style="--i: 1.35s">
							<a href="contact_view.php">ارتباط با ما</a>
							
						</li>
					</ul>
				</div>
				
				
				
				<div class="log-sign" style="--i: 1.8s">
					<div class="log-sign">
						<a href="loginPanel_controller.php" class="btn transparent">ورود به پنل کاربری</a>
						<a href="addUser_controller.php" class="btn solid">ثبت نام  </a>
					</div>
				</div>
			</div>
			
			<div class="humburger-menu-container">
				<div class="humburger-menu">
					<div></div>
				</div>
			</div>
			
			
			
		</div>
	</header>
</body>
</html>