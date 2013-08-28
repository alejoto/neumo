<?php include '../DB/connect.php' ?>

<html>
<title>Reiniciar Contrase&ntilde;a</title>
<body>
  <?php
    $user_id = $_GET['activate'];
    $sql_user = "SELECT * FROM users WHERE user_id='$user_id'";
    $user = mysqli_fetch_array(mysqli_query($con,$sql_user));
    $days = 1;
    $is_in_date = (strtotime(date('Y-m-d')) - strtotime($user['reset_beggining_at'])) <= 86400*$days;
    
    if( $user['isReseting'] == 1 && $is_in_date ){
      include 'form_reset_password.php';
    }else{
      echo "Este enlace a expirado, favor solicite una nueva contrase&ntilde;a<br>";
      echo "<a href='http://www.recolhap.com'>Volver</a>";
    }
  ?>
<body>
</html>