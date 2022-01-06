<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogproduct_style.css" type="text/css">
	
	<!--Link Font Awesome Pro-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"crossorigin="anonymous"/>
	<!--End Link Font Awesome Pro-->
	<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
    <title>کاتالوگ محصولات</title>
</head>
	
<body>

	<div class="container">
		<img draggable="false" src="assets/images/upload/banner/productList_banner.png" alt="banner-product" class="banner-productlist">

        <div class="container-product">
			<div class="header-products"></div>
            <div class="grid-container">
                <?php

                 foreach ($productList as $product){
                    include 'template\ProductCard.php';
                 }
                ?>
            </div>
        </div>
    </div>
	<script type="text/javascript" src="assets/js/Components.js"></script>
</body>
	
</html>
