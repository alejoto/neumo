<?php 
  ob_start();
  session_start(); 

  if(isset($_SESSION['username'])){ 
    echo '<u>'.$_SESSION['username'].'</u>';
    echo '<a href="modules/login/logout.php" role="button" class="btn btn-primary left_space">Logout</a>';
  }else{
    header('Location: ../../index.php'); 
  }

?>
