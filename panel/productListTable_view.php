<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productListTable_style.css" type="text/css">
    <title>محصولات فروشگاه | پنل مدیر</title>
</head>
<body>
    <div class="container">
		<img src="../assets/images/upload/banner/BannerProducts.png" alt="BannerProduct">

        <div class="container-product">

            <div class="grid-container">

              <table class="datatable">
                <tr>
                  <th>شماره</th>
                  <th>نام</th>
                  <th>شرکت سازنده</th>
                  <th>قیمت</th>
                  <th>تصویر</th>
                  <th>امکانات</th>
                </tr>

                  <?php
                   foreach ($productList as $product){
                      include '..\template\productTableItem.php';
                   }
                  ?>
                  
              </table>





            </div>
        </div>
    </div>

</body>
</html>
