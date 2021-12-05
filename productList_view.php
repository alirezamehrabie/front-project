<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogproduct_style.css" type="text/css">
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

</body>
</html>
