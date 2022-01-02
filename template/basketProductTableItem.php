<?php

$sql_product = "Select * From product where id = {$basket['productId']}";
$result_product = $dbc -> query($sql_product);
$resultProduct = $result_product -> fetchArray();

?>

<div class="card">
	
	<div id="section_1" class="img-card">
		<img src="<?php echo $resultProduct['imagesrc_pro'] ?>" alt="image">
	</div>
	

	<div class="text-card">
	
		<p><span>کد کالا: </span><?php echo $basket['productId'] ?></p>
	
	
		<p><span>نام کالا: </span><?php echo $resultProduct['name_pro'] ?></p>

	
		<p><span>قیمت کالا: </span><?php echo $resultProduct['price_pro'] ?> تومان</p>
		
	
		<p><span> رنگ: </span><?php echo $resultProduct['color_pro'] ?></p>
		
	
		<p><span> برند: </span><?php echo $resultProduct['company_pro'] ?></p>
		
	</div>	
		
	
	<a class="btn btn-remove" href="../../front-project/removeBasketProduct_controller.php?id=<?php echo $basket['productId']?>">
		<i class="fas fa-trash-alt"></i>
	</a>
		
</div>






