<?php
  include '../DB/connect.php';

  $pwd  = $_POST['pwd'];
  $pwd_conf = $_POST['pwd_conf'];
  $user_id = $_POST['user_id'];

  
  if( $pwd == $pwd_conf && $pwd!="" ){
    $pwd_md5 = md5($pwd);
    $sql_update_pwd = "UPDATE users SET isReseting='0',pwd='$pwd_md5' WHERE user_id='$user_id'";
    $updated = mysqli_query($con,$sql_update_pwd);

    if($updated)
      echo "Su Contrase&ntilde;a se actualizo correctamente<br>";
    else
      echo "Ocurrio un error al actualizar su contrase&ntilde;a, favor contacte al administrador<br>";

  }else{
    echo "Las contrase&ntilde;as no coinciden<br>";
  }
  echo "<a href='http://www.recolhap.com'>Volver</a>";
  
?>