<?php 
  ob_start();
  session_start();
  
  $page = $_GET["page"];

  if(isset($_SESSION['username'])){
    
    include '../includes/header.php';
    
    if($page == "profile") include 'profile.php';
    else if($page == "patients") include 'patients_search.php';
    
    echo '</body>';
    echo '</html>';
    
  }else{
    header('Location: ../../index.php'); 
  }

?>
