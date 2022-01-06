<!DOCTYPE html>
<html lang="fa">
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="imagetoolbar" content="no"/>
	<link rel="stylesheet" href="indexHeader_style.css" type="text/css">
	<link rel="stylesheet" href="indexMain_style.css" type="text/css">
	<link rel="stylesheet" href="indexSlider_style.css" type="text/css">
	<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
	
	<!--Link Font Awesome Pro-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"crossorigin="anonymous"/>
	<!--End Link Font Awesome Pro-->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <title>صفحۀ اصلی | ونوس</title>
	
</head>

	
<body oncontextmenu="return false;">
	<header>
		<div class="container">
			<input type="checkbox" name="" id="check">
			
			<div class="logo-contaner">
				<img draggable="false" src="assets/images/upload/home/icon-header.png" alt="لوگو">
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

<!--Container Next Header For Page Main-->
<div class="container-main">

	<!--Image Banner Header-->
	<img loading="lazy" src="assets/images/upload/home/bannerHome.jpg" alt="" class="img-banner" draggable="false">
	

	<!--Container Cards Center-->
	<div class="card-container">
		
		<div class="card">
			<i class="far fa-smile-beam"></i>
			<div class="text-card">
				<h3>رضایت مشتری</h3>
				<p>اعتماد شما مشتریان عزیز، اعتبار ما است، <br>در طول سالیان شرکت ونوس سعی کرده تا اعتماد شما مشتریان را جلب کند و بهترین ها را در اختیار شما قرار دهد، محصولات خود را به صورت آنلاین سفارش دهید و در صورت عدم رضایت می تواند در عرض 24 ساعت، بدون هیچ هزینه اضافی محصول خریداری شده را بازگردانید</p>
			</div>
		</div>
	
	
	<div class="card">
		<i class="far fa-box-check"></i>
		<div class="text-card">
			<h3>کیفیت</h3>
			<p>کیفیتی که انتظار داشتید و قیمتی که انتظار نداشتید را با ما تجربه کنید، ما در جهت کسب رضایت شما تمام تلاش خود را به کار بسته ایم و امیدواریم با همراهی شما عزیزان بتوانیم کیفیت ارائه خدمات را بیش از پیش بالا برده و رضایت شما را جلب نماییم، شما لایق بهترین ها هستید.</p>
		</div>
	</div>
	
	<div class="card">
		<i class="far fa-shipping-fast"></i>
		<div class="text-card">
			<h3>ارسال رایگان</h3>
			<p> لازم به ذکر است که تمامی محصولاتی را که از این سایت خریداری می نمایید، در هر نقطه از کشور بصورت کاملا رایگان در درب منزل یا محل کار، به شما خریدار محترم تحویل داده خواهد شد. از این رو در هنگام دریافت مرسوله خود، نیازی به پرداخت وجه به مأمور پست بابت هزینه ارسال نیست و نگرانی از این بابت نیست</p>
		</div>
	</div>
		
	<div class="card">
		<i class="far fa-usd-circle"></i>
		<div class="text-card">
			<h3>قیمت</h3>
			<p>از قیمت های باور نکردنی محصولات اورجینال فروشگاه ونوس به خوبی استفاده کنید، تلاش ما این بوده
			تا در فروش محصولات خود انصاف را رعایت کرده و محصولات را به قیمت مناسب تر نسبت به سایر
			فروشگاه های آنلاین به مشتریان خود هدیه دهیم، همیشه گران بودن محصول ملاکی برای خوب بودن محصول نیست</p>
		</div>
	</div>
		
</div>
	

	<!--Section link Catalog Product-->
	<div class="link-catalog-container" id="sec-link-catalog-container">
		<a draggable="false" href="#sec-link-catalog-container">
			<img loading="lazy" src="assets/images/upload/home/bannerLinkProduct.png" 
				 alt="link Catalog" onContextMenu="return false;" draggable="false">
		</a>
	</div>
	
	<!--Section Managers-->
	<div class="managers-container">
<!--		<a href=""><i class="far fa-user-headset"></i>مدیران و پشتیبانی سایت</a>-->
		<div class="managers">
			<div class="card-manager">
				<div class="titer-manager"><p>کارشناس امنیت وب</p></div>
				<img src="assets/images/upload/home/profileManager-1.png" alt="proflie-manager" draggable="false">
				<h5>میلاد امینی</h5>
				<button>مشاهده پروفایل و رزومه</button>
			</div>
	
			<div class="card-manager">
				<div class="titer-manager"><p>پشتیبانی و مدیریت سایت</p></div>
				<img src="assets/images/upload/home/profileManager-2.png" alt="proflie-manager"  draggable="false">
				<h5>محمد جمشیدی</h5>
				<button>مشاهده پروفایل و رزومه</button>
			</div>
		
			<div class="card-manager">
				<div class="titer-manager"><p>مدیریت سایت و طراح</p></div>
				<img src="assets/images/upload/home/profileManager-3.png" alt="proflie-manager"  draggable="false">
				<h5>علی همتی</h5>
				<button>مشاهده پروفایل و رزومه</button>
			</div>

			
			<div class="card-manager">
				<div class="titer-manager"><p>مدیریت سایت</p></div>
				<img src="assets/images/upload/home/profileManager-5.png" alt="proflie-manager"  draggable="false">
				<h5>محمد فتوحی</h5>
				<button>مشاهده پروفایل و رزومه</button>
			</div>

		</div>
	</div>


	
<!--Section link contact Product-->
	<div class="link-contact-container" id="sec-link-contact-container">
		<a draggable="false" href="#sec-link-contact-container">
			<img loading="lazy" src="assets/images/upload/home/bannerLinkContactus.png" 
				 alt="link Catalog" onContextMenu="return false;" draggable="false">
		</a>
	</div>
	
	
	<p id="tite-social-media">شبکه های اجتماعی و ارتباطات مجازی</p>
	<div class="social-media-container">
		
		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/facebook.png" alt="facebook">
		</div>
		
		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/instagram.png" alt="instagram">
		</div>

		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/linkdin.png" alt="linkdin">
		</div>
		
		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/whatsapp.png" alt="whatsapp">
		</div>
		
		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/twitter.png" alt="twitter">
		</div>
		
		<div class="ticket-social">
			<img draggable="false" src="assets/images/upload/home/icon-socialMedia/massenger.png" alt="massenger"	>
		</div>
		
	</div>
	
	
	<!--Section Advertise  -->
	<div class="advertise-container" id="sec-advertise-container">
		<a draggable="false" href="#sec-advertise-container">
			<img loading="lazy" src="assets/images/upload/home/banner-advertise.png" 
				 alt="advertise" onContextMenu="return false;" draggable="false">
		</a>
	</div>
	

	<!--Section Counter-->
	<div class="counter-container">
		<div class="row">
			<div class="col">
				<div class="counter-box">
					<i class="fal fa-thumbs-up"></i>
					<p class="counter">1200</p>
					
				</div>
			</div>
			
			<div class="col">
				<div class="counter-box">
					<i class="fal fa-bookmark"></i>
					<p class="counter">860</p>
					
				</div>
			</div>
			
			<div class="col">
				<div class="counter-box">
					<i class="fal fa-users-crown"-></i>
					<p class="counter">25</p>
					
				</div>
			</div>
			
			<div class="col">
				<div class="counter-box">
					<i class="fal fa-box-open"></i>
					<p class="counter">100</p>
					
				</div>
			</div>
		</div>
	</div>
	

	
	<!--Section Footer-->
	<div class="footer-container">
		<div class="row-footer">
			
			<div class="col-footer">
				<div class="content-footer">
					<strong>دسترسی سریع</strong>
					<a href="loginPanel_controller.php" class="link-footer-quick">ورود به پنل کاربری</a>
					<a href="addUser_controller.php" class="link-footer-quick">ثبت نام در باشگاه مشتریان</a>
					<a href="#" class="link-footer-quick">سوالات متداول درباره محصولات</a>
					<a href="contact.php" class="link-footer-quick">ارسال تیکت به پیشتیبانی</a>
					<a href="#sec-link-contact-container" class="link-footer-quick">شبکه های اجتماعی ونوس <small>(فضای مجازی)</small></a>

				</div>
			</div>
			
			<div class="col-footer">
				<div class="content-footer">
					<strong>راه های ارتباطی با مجموعۀ ما</strong>
					<p>آدرس ایمیل: <span>venuscomany.yahoo.com</span></p>
					<p>تلفن همراه: <span>09135462136</span></p>
					<p>واتساپ <span>09336941473</span></p>
					<p>تلفن ثابت: <span>03133568741</span></p>
					<p>آدرس: <span>اصفهان، خیابان طالقانی، جنب بازار کامپیوتر</span></p>
				</div>
			</div>
			
			<div class="col-footer">
				<div class="content-footer">
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26870.86971602951!2d51.67188225642089!3d32.6632037059625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfa!2s!4v1641036950605!5m2!1sfa!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					
				</div>
			</div>
			
		</div>
	</div>
	
</div>


<div class="end-text">
	<p>تمامی حقوق مادی و معنوی سایت محفوظ می باشد</p>
</div>








<!--Counter-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter-->
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 30,
                time: 5000
            });
        });

    </script>
</body>
</html>
