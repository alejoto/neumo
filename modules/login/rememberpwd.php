<?php 
  include '../DB/connect.php';
  include '../DB/email_format.php';

  if (isset($_POST['usr'])) {
    $usr    = $_POST['usr'];
    $result = mysqli_query($con,"SELECT * FROM users WHERE user_id='$usr' ");
    $row    = mysqli_fetch_array($result);

    if ($row[0]==""){
      echo "Usuario no existe, debe registrarse!";
    }else{
      $user_id = $row['user_id'];
      $url_for_update_pwd = "http://localhost:8888/neumo2/modules/login/forgotten_pwd.php?activate=".$user_id;
      $link_to_send = "<a href='$url_for_update_pwd'>Acceda a este link para cambiar su contrase&ntilde;a</a>";
      $subject_email = "Petición cambio de contraseña";
      $sended = send_email($user_id, $subject_email, $link_to_send);
      
      if( $sended == true ){
        echo "Se envio un enlace a su correo para restablecer su contrase&ntilde;a";
        $t = date("Y-m-d");
        $update_users_fields = "UPDATE users SET isReseting='1', reset_beggining_at='$t' WHERE user_id='$user_id'";
        $updated = mysqli_query($con,$update_users_fields);
      }else{
        echo "Upps, ocurrio un error al enviar el correo!";
      }
      
    }
  }
?>