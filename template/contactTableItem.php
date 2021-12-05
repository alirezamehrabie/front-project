<!-- Table Row -->
<tr>
<!-- Table Data -->

  <td id="number-contact">
    <?php echo $contact['id']; ?>
  </td>


  <td>
    <?php echo $contact['lastname_c']; ?>
  </td>



  <td>
    <?php echo $contact['firstname_c']; ?>
  </td>


  <td>
    <?php echo $contact['email_c']; ?>
  </td>


  <td>
    <?php echo $contact['phone_c']; ?>
  </td>


  <td>
    <?php echo $contact['text_c']; ?>
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
