<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogproduct_style.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
	integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
	
    <title>کاتالوگ محصولات</title>
</head>
<body>
    <div class="container">

        <div class="body-titr">
             <h1>لیست محصولات فروشگاه لوازم جانبی رایانه تکنوپلاس</h1>
        </div>

        <div class="container-product">
           
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
