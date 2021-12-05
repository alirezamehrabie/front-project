<!-- Table Row -->
<tr>
<!-- Table Data -->

<!-- Number Product -->
  <td id="number-user">
    <?php echo $user['id']; ?>
  </td>


  <td>
    <?php echo $user['username']; ?>
  </td>


  <td>
    <?php echo $user['phone_user']; ?>
  </td>


<td>
  <?php echo $user['fullname_user']; ?>
</td>

<td>
  <?php echo $user['address_user']; ?>
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
