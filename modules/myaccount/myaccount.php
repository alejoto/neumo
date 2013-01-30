<?php 
  ob_start();
  session_start();
  
  $page = $_GET["page"];

  if(isset($_SESSION['username'])){
    
    include '../includes/header.php';
    
    if($page == "profile") include 'profile.php';
    else if($page == "patients") include 'patients_search.php';
    else if($page == "basic") include '../patient/basic.php';
    else if($page == "blood") include '../patient/blood.php';
    else if($page == "diagnostic") include '../patient/diagnostic.php';
    else if($page == "cardiovascular") include '../patient/cardiovascular.php';
    else if($page == "statistics") include '../statistics/statistics.php';
    
    include '../includes/footer.php';
    
  }else{
    header('Location: ../../index.php'); 
  }

?>
