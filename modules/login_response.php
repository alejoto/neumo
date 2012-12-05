<?php
  session_start();

  $user = $_POST["user"];
  $pwd  =  $_POST["pwd"];
  $_SESSION['username'] = $user;
  header('Location: ../index.php'); 
?>