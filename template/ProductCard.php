<div class="card">
	
	<!--Image Product-->
	<img draggable="false" class="image-product" src="<?php echo $product['imagesrc_pro'] ?>" alt="عکس محصول">
	
<div class="text-body">
		
		<div class="name-titr">
			<a href="productList_controller.php?id=<?php echo $product['id'] ?>"><?php echo $product['name_pro']?></a>
		</div>
		<p><i class="fad fa-award"></i> شرکت: <span><?php echo $product['company_pro'] ?></span></p>
		<p><i class="fad fa-palette"></i> رنگ: <span><?php echo $product['color_pro'] ?></span></p>
		<p><i class="fad fa-usd-circle"></i> قیمت: <span><?php echo $product['price_pro'] ?> تومان</span></p>
		
	
	
	<div class="btns">
		
		<a href="bookmarkProduct_controller.php?id=<?php echo $product['id'] ?>"><i class="fad fa-bookmark"></i></a>
		
		<a href="likeProduct_controller.php?id=<?php echo $product['id']?>"><i class="fad fa-heart"></i></a>
		
		<a href="basketProduct_controller.php?id=<?php echo $product['id'] ?>"><i class="fad fa-cart-plus"></i></i></a>
		
	</div>
	
	<div class="btn-detail">جزئیات محصول</div>
	
</div>
</div>


