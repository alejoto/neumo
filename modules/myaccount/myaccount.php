<?php 
  ob_start();
  session_start(); 

  if(isset($_SESSION['username'])){ 
    include 'profile.php';
  }else{
    header('Location: ../../index.php'); 
  }

?>
