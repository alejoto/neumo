<?php
  include 'connect.php';

  // updating pwds for users
  $select_users = "SELECT * FROM users";
  $users = mysqli_query($con,$select_users);

  while( $user = mysqli_fetch_array( $users )){
    $pwd_md5 = md5($user["pwd"]);
    $user_id = $user["user_id"];
    $update_users = "UPDATE users SET pwd='$pwd_md5' WHERE user_id='$user_id'";
    $updated = mysqli_query($con,$update_users);
  }
  
  // adding two new fields to users 
  $add_is_reseting_to_users = "ALTER TABLE users ADD isReseting boolean";
  $add_reset_beggining_at   = "ALTER TABLE users ADD reset_beggining_at date";
  
  $is_reseting        = mysqli_query( $con,$add_is_reseting_to_users );
  $reset_beggining_at = mysqli_query( $con,$add_reset_beggining_at );
  
  if( $is_reseting == false || $reset_beggining_at == false ) 
    echo "Ocurrio un error adicionando los campos";
    
?>