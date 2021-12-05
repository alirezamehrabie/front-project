<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit-add-product.css" type="text/css">
    <title>ویرایش محصول فروشگاه</title>
</head>
<body>

    <div class="container">
        <div class="container-product">
            
            <h1> <span><i class="fas fa-laptop-medical"></i></span>ویرایش اطلاعات محصول به فروشگاه لوازم جانبی رایانه</h1>
            <form action="add-products.php" method="post">
                <div>
                    <input name="number_product" type="number" placeholder="شماره کالا" required>
                    <input name="name_product" type="text" placeholder="نام کالا" required>
                </div>

                <div>
                    <input name="count_product" type="text" placeholder="تعداد کالا" required >
                    <input name="price_product" type="text" placeholder="قیمت کالا (تومان)" required >
                </div>

                <div>
                    <i class="fas fa-edit"></i>
                    <a href="#">توضیحات را به محصول ویرایش نمایید</a>
                    <textarea name="detalis_product" id="detalis" required></textarea>
                </div>

                <div>
                    <i class="fas fa-camera-retro"></i>
                    <a href="#">عکس محصول را ویرایش کنید</a>
                    <input type="file" name="picture_product">
                </div>

                <div>
                    
                    <button id="btn-sub" type="submit"> <span><i class="far fa-check-circle"></i></span>ثبت ویرایش جدید</button>
                </div>
                
            </form>
        </div>
    </div>
    
</body>
</html>