<!-- Table Row -->
<tr>
<!-- Table Data -->

<!-- Number Product -->
  <td id="number-product">
    <?php echo $product['id']; ?>
  </td>

  <!-- Name Product -->
  <td>
    <?php echo $product['name_pro']; ?>
  </td>


<!-- Company Product -->
  <td>
    <?php echo $product['company_pro']; ?>
  </td>


<!-- Price Product -->
  <td>
    <?php echo $product['price_pro']; ?>
  </td>


<!-- Image Product -->
  <td class="btns-feature">
    <img src="<?php  echo $product["imagesrc_pro"]; ?>" alt="Picture Product" class="image_tumbnail">
  </td>

  <td>
    <a class="btn btn-update" href="#">
      ویرایش
      <!-- <button type="button" name="button-update">ویرایش</button> -->
    </a>

    <a class="btn btn-insert" href="#">
      افزودن
      <!-- <button type="button" name="button-insert">افزودن</button> -->
    </a>

    <a class="btn btn-delet" href="#">
      حذف
      <!-- <button type="button" name="button-delet">حذف</button> -->
    </a>
  </td>

</tr>
