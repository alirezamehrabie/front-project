<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <title>خانه | تکنوپلاس</title>
</head>
<body>
    <div class="container">

        <div class="body-titr">
             <h1>صفحۀ اصلی وبسایت تکنوپلاس</h1>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background:url('assets/images/upload/home/banner-1.jpg')"></div>
                <div class="swiper-slide" style="background:url('assets/images/upload/home/banner-2.jpg')" ></div>
                <div class="swiper-slide" style="background:url('assets/images/upload/home/banner-3.jpg')"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>


        <div class="container-product">
           <h2>ارزان ترین ها</h2>
            <div class="grid-container">
              <?php
                   foreach ($productListCheapest as $product){
                      include 'template\ProductCard.php';
                   }
                  ?>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets\js\main.js">

    </script>
</body>
</html>
