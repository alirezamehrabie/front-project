<article class="card">
	
  <img src="<?php echo $product['imagesrc_pro'] ?>" alt="عکس محصول"><br>
  <div class="card-body">
	  
    <h2><a href="productList_controller.php?id=<?php echo $product['id'] ?>"> <?php echo $product['name_pro'] ?></a></h2>
    <h3>قیمت: <?php echo $product['price_pro'] ?></h3>
    <p>شرکت (برند): <?php echo $product['company_pro'] ?></p>
	<br>
    <p>رنگ: <?php echo $product['color_pro'] ?></p>
	<br>
    <p>توضیحات: <?php echo $product['detail_pro'] ?> </p>
	
	<a href="basketProduct_controller.php?id=<?php echo $product['id'] ?>" class="btn">
		<button class="btn-buy">افزودن به سبد خرید</button>
	</a>
	  
	  <div>
		<a href="likeProduct_controller.php?id=<?php echo $product['id'] ?>" class="btn">
			<i class="far fa-heart"></i>
		</a> 
		  
		<a href="bookmarkProduct_controller.php?id=<?php echo $product['id'] ?>" class="btn">
			<i class="far fa-bookmark"></i>
		</a>
	  </div>
	  
  </div>
</article>
