<?php
  session_start();

  include '../DB/connect.php';

  $usr  = htmlspecialchars($_POST['usr'],ENT_QUOTES);
  $pwd  = $_POST['pwd'];
  $sql    = "SELECT * FROM users WHERE user_id='$usr' ";
  $result = mysqli_query($con,$sql);
  $row    = mysqli_fetch_array($result);

  if ($row[0] !=""|| $row[0] !=null ) {

    if( $pwd==$row['pwd']){

      $_SESSION['username'] = $usr;
      echo "yes";

    }else       echo "no";
  }else     echo "no";

mysqli_close($con);


?>
