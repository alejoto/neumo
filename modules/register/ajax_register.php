<?php
  session_start();

  include '../DB/connect.php';

  $mail  = $_POST['mail'];
  $pwd1  = $_POST['pwd1'];
  $pwd2  = $_POST['pwd2'];

  $sql    = "SELECT * FROM users WHERE user_id='".$mail."'";
  $result = mysql_query($sql);
  $row    = mysql_fetch_array($result);

  if( mysql_num_rows($result)>0 ) {
    echo "no";
  }else{
    if( $pwd1 == $pwd2 && $pwd1 != "" ){
      mysql_query("INSERT INTO users (user_id, pwd, rol, status) VALUES ('".$mail."', '".$pwd1."','NN','0')");
      $_SESSION['username'] = $mail;
      echo "yes";
    }else{
      echo 'no';
    }
  }

  mysql_close($con);

?>