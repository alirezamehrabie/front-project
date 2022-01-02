<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<title>سبد خرید کالا | کاربران</title>
	
	<!--Link Font Awesome Pro-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
	  crossorigin="anonymous"/>
	<!--End Link Font Awesome Pro-->
	
<link rel="stylesheet" href="basketProductListTable_style.css" type="text/css">
	
</head>

<body>
	
	 
		 <div class="banner">
			 <img draggable="false"  src="assets/images/upload/bannerBasketProduct.png" alt="">
		 </div>
	
	 <div class="container">
		
		 
		 
		 
        <div id="titr-container">
			<i class="fad fa-shopping-cart"></i>
			<h1>سبد خرید کالای کاربر: <span><?php echo $resultUser['fullname_user'] ?></span></h1>
        </div>
		<div id="titr-codeuser">
			<h3>کد مشتری: <?php echo Authentication :: uid() ?></h3>
		</div>

        <div class="container-product">
            <div class="container-card">

                  <?php
                   foreach ($resultBasket as $basket)
				   {
					   include 'template\basketProductTableItem.php';
				   }
                  ?>               
         
            </div>
        </div>
    </div>

</body>
</html>