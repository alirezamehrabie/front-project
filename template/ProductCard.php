<article class="card">
  <img src="<?php echo $product['imagesrc_pro'] ?>" alt="عکس محصول"><br>
  <div class="card-body">
    <h2><a href="productList_controller.php?id=<?php echo $product['id'] ?>"> <?php echo $product['name_pro'] ?></a> </h2>
    <h3>قیمت: <?php echo $product['price_pro'] ?></h3>
    <p>شرکت (برند): <?php echo $product['company_pro'] ?></p><br>
    <p>رنگ: <?php echo $product['color_pro'] ?></p><br>
    <p>توضیحات: <?php echo $product['detail_pro'] ?> </p>
    <button class="btn-buy">افزودن به سبد خرید</button>

  </div>
</article>
