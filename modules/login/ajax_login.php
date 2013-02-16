<?php
  session_start();

  include '../DB/connect.php';

  $usr  = htmlspecialchars($_POST['usr'],ENT_QUOTES);
  $pwd  = $_POST['pwd'];
  $sql    = "SELECT * FROM users WHERE user_id='".$usr."'";
  $result = mysql_query($sql);
  $row    = mysql_fetch_array($result);

  if( mysql_num_rows($result)>0 ) {

    if( strcmp($row['pwd'], $pwd )==0){

      $_SESSION['username'] = $usr;
      echo "yes";

    }else
      echo "no";
  }else
    echo "no";

  mysql_close($con);

?>
