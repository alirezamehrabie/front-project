<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<title>سبد خرید کالا</title>
<link rel="stylesheet" href="panel/productListTable_style.css" type="text/css">
</head>

<body>
	
	 <div class="container">

        <div class="body-titr">
             <h1>سبد خرید کالای کاربر</h1>
        </div>

        <div class="container-product">

            <div class="grid-container">

              <table class="datatable">
                <tr>
                  <th>شماره</th>
                  <th>یو ای دی</th>
                  <th>کد کالا </th>
               
                </tr>

                  <?php
                   foreach ($resultBasket as $basket){
                      include 'template\basketProductTableItem.php';
                   }
                  ?>
                  
              </table>


            </div>
        </div>
    </div>
	
	
</body>
</html>