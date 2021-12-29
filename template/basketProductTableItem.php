<?php
$sql_product = "Select * From product where id = {$basket['productId']}";
$result_product = $dbc -> query($sql_product);
$resultProduct = $result_product -> fetchArray();
?>

<tr>
	<td>
		<?php echo $basket['id'] ?>
	</td>

	<td>
		<?php echo $basket['uid'] ?>
	</td>

	<td>
		<?php echo $basket['productId'] ?>
	</td>
	
	<td>
	<?php echo $resultProduct['number_pro'] ?>
	</td>
	
	<td>
	<?php echo $resultProduct['name_pro'] ?>
	</td>
	
	<td>
	<?php echo $resultProduct['price_pro'] ?>
	</td>
</tr>