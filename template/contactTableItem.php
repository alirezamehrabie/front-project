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

    <a class="btn btn-delet" href="../panel/removeContact_controller.php?id=<?php echo $contact['id'] ?>">
      حذف
      <!-- <button type="button" name="button-delet">حذف</button> -->
    </a>
  </td>

</tr>
