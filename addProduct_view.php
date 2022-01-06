<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<title>ثبت کالا | انبار فروشگاه</title>
<link rel="stylesheet" href="addProduct_style.css" type="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="assets/images/upload/favicon.ico">
    <script type="text/javascript">
        function myFunction() 
        {
            document.getElementById("myForm").reset();
        }
     </script>
</head>

<body>
    <div class="container-main">
		
		<div class="text-header">
			<h1>فرم ثبت کالا در انبار محصولات</h1>
			<h3>سایت فروشگاه لوازم جانبی کامپیوتر و لپ تاپ <span>ونوس</span></h3>
		</div>
		
		
            <form action="" method="post" id="myForm" autocomplete="off" enctype="multipart/form-data">
				
				<div class="container">
					
					<div class="col">
						<label for="name_product">نام کالا <small>(اختصاری)</small></label>
						<input class="inputs" type="text" id="nameProduct" name="name_product" autocomplete="off" readonly
							   onFocus="this.removeAttribute('readonly');">
					
						<label for="price_product">قیمت کالا <small>(تومان)</small></label>
						<input required type="number" id="priceProduct" name="price_product" readonly
							   onFocus="this.removeAttribute('readonly');">
					</div>
				
				
					<div class="col">
						<label for="company_product">برند کالا <small>(شرکت تولیدکننده)</small></label>
						<input required type="text" id="companyProduct" name="company_product" autocomplete="off" 	
							   readonly onFocus="this.removeAttribute('readonly');">

						<label for="color_product">رنگ کالا</label>
						<input required type="text" id="colorProduct" name="color_product" onKeyDown="if(this.value.length==11) return false;" readonly onFocus="this.removeAttribute('readonly');"/>
							
					</div>
					

					<div class="col">
						<label for="count_product">تعداد کالا</label>
						<input required type="number" id="countProduct" name="count_product" autocomplete="off" onKeyDown="if(this.value.length==4) return false;" readonly onFocus="this.removeAttribute('readonly');">
					</div>
					
					<div class="col">
						<label for="image_product">آپلود عکس کالا</label>
						<input required type="file" id="image_product" name="image_product" autocomplete="off">
					</div>
				</div>
				
				<div class="container container-bottom">
					<div class="col">
						<label for="detail_product">توضیحات کالا</label>
						<textarea name="detail_product" id="detailProduct" placeholder="چیزی تایپ کنید ..."></textarea>
					</div>
					
					<div class="col btns">
						<a href=""><button type="submit" name="submit" id="mybtn" >ثبت محصول در انبار</button></a>
						<a href=""><button type="button" onclick="myFunction()" >پاک سازی فرم</button></a>
						<a href=""><button type="button">بازگشت به پنل کاربری</button></a>
					</div>
				</div>	
					

					
				
			
				
			</form>
		</div>
        
   
	
</body>
</html>