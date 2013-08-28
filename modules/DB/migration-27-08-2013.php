<?php
  // actualizar pwds users
  $addIsResetingToUsers = "ALTER TABLE users ADD isReseting boolean";
  $addResetBegginingAt = "ALTER TABLE users ADD reset_beggining_at boolean";
  
  $data = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
  
  
?>