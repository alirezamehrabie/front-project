
<tr>

  <td id="number-user">
    <?php echo $user['id']; ?>
  </td>


  <td>
    <?php echo $user['username_user']; ?>
  </td>

	
 <td>
    <?php echo $user['password_user']; ?>
 </td>
	
	
  <td>
    <?php echo $user['phone_user']; ?>
  </td>


<td>
  <?php echo $user['fullname_user']; ?>
</td>



  <td>
    <a class="btn btn-update" href="#">
      ویرایش
      <!-- <button type="button" name="button-update">ویرایش</button> -->
    </a>

    <a class="btn btn-delet" href="../panel/removeUser_controller.php?id=<?php echo $user['id'] ?>">
      حذف
      <!-- <button type="button" name="button-delet">حذف</button> -->
    </a>
  </td>

</tr>
