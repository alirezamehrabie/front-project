<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<title>صفحه جزئیات محصول</title>
<link rel="stylesheet" href="detailProduct_style.css" type="text/css">
<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
<!--Link Font Awesome Pro-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"crossorigin="anonymous"/>
<!--End Link Font Awesome Pro-->
</head>

<body>
	
	<section class="container-main">
		
		<img src="assets/images/upload/detailProduct/detailProduct-banner.png" alt="بنر صفحه" class="image-banner" draggable="false">
		
		<div class="container">
			
			<div class="col right">	
				<img draggable="false" class="image-product" src="assets/images/upload/products/<?php echo $productSelected['imagesrc_pro'] ?>" alt="عکس محصول">
			</div>

			
			<div class="col left">
				
				<div class="row-section name-brand">
					<h1><i class="fad fa-check-circle"></i><?php echo $productSelected['name_pro'] ?></h1>
					<p><i class="fad fa-award"></i><?php echo $productSelected['company_pro'] ?></p>
					<p><i class="fad fa-palette"></i><?php echo $productSelected['color_pro'] ?></p>
				</div>
				
					
				<div class="row-section stars">
					<i class="fad fa-star"></i>
					<i class="fad fa-star"></i>
					<i class="fad fa-star"></i>
					<i class="fad fa-star"></i>
					<i class="fad fa-star"></i>
				</div>
				

				
				<div class="row-section detail">
					<h4><i class="fad fa-info-circle"></i>جزئیات</h4>
					<p><?php echo $productSelected['detail_pro'] ?></p>
				</div>
				
				<div class="row-section price">
					<h4><i class="fad fa-usd-circle"></i>قیمت </h4>
					<p><span><?php echo $productSelected['price_pro'] ?> </span>تومان</p>
				</div>
				
				<div class="row-section options">
					<input type="number" placeholder="تعداد" maxlength="2" min="1" max="15" value="">
					<button>افزودن به سبد خرید</button>
				</div>
				
				<div class="row-section exit">
					<p>بازگشت</p>
					<i class="fal fa-arrow-circle-left"></i>
				</div>
				
			</div>
			
		
		</div>
		
		<div class="container-comment">
			<?php include "index_comment.php" ?>
		</div>
		
		
	
		
		
		
		
	</section>
	
</body>
</html>