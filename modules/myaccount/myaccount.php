<?php 
  ob_start();
  session_start();
  
  $page = $_GET["page"];

  if(isset($_SESSION['username'])){
    
    include '../includes/header.php';
    
    if($page == "profile") include 'profile.php';
    else if($page == "patients") include 'patients_search.php';
    else if($page == "statistics") include '../statistics/statistics.php';
    else if( isset($_SESSION['patient']) ){
      if($page == "basic") include '../patient/basic.php';
      else if($page == "blood") include '../patient/blood.php';
      else if($page == "diagnostic") include '../patient/diagnostic.php';
      else if($page == "cardiovascular" && isset($_SESSION['patient']) ) include '../patient/cardiovascular.php';
    }else header('Location: ../../index.php'); 
        
    include '../includes/footer.php';
    
  }else{
    header('Location: ../../index.php'); 
  }

?>
