<?php

session_start();

include 'settings.php';
include 'db.php';
include 'security.php';


$dbc = new db ($dbHost,$dbUser,$dbPass,$dbName);

if(isset($_POST['submit']))
{
	$target_dir = "assets/images/upload/products/";
	$target_file = $target_dir . basename($_FILES["image_product"]["name"]);
	$uploadOk = 1;
	$fileName = basename($_FILES["image_product"]["name"]);


	$check = getimagesize($_FILES["image_product"]["tmp_name"]);
  
	if($check !== false)
	{
    $uploadOk = 1;
	}
	else
	{
    $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	}
	else 
	{
	  if (move_uploaded_file($_FILES["image_product"]["tmp_name"], $target_file)) {
//		echo "The file ". htmlspecialchars( basename( $_FILES["image_product"]["name"])). " has been uploaded.";
	} else 
	  {
		echo "Sorry, there was an error uploading your file.";
	  }
	}
	/*Get Input Data*/
	$nameProduct = $_POST['name_product'];
	$companyProduct = $_POST['company_product'];
	$colorProduct = $_POST['color_product'];
	$countProduct = $_POST['count_product'];
	$price_product = $_POST['price_product'];
	$detailProduct = $_POST['detail_product'];
	$imageProduct = $fileName;

	
	$sql = "Insert Into product(name_pro,company_pro,color_pro,count_pro,price_pro,detail_pro,imagesrc_pro) 
			Values (?, ?, ?, ?, ?, ?, ?)";
	$result = $dbc -> query($sql, $nameProduct, $companyProduct, $colorProduct, $countProduct, $price_product, $detailProduct, $imageProduct);
	$dbc -> close();
	include 'messages\messageAddproduct.php';
	
}

else
{
	include 'addProduct_view.php';
}

?>