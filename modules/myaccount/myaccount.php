<?php
ob_start();
session_start();
if (isset($_GET["page"])) {$page = $_GET["page"];}
else {header('Location: myaccount.php?page=patients');}

if(isset($_SESSION['username']))
{
  include '../includes/header.php';
  if($page == "user_register") include 'user_register.php';
  else if($page == "patients") include 'patients_search.php';
  else if($page == "statistics") include '../statistics/statistics.php';
  else if( isset($_SESSION['patient']) ){
    echo $_SESSION['evaluation'];
    if($page == "basic") include '../patient/basic.php';
    else if($page == "blood") include '../patient/blood.php';
    else if($page == "diagnostic") include '../patient/diagnostic.php';
    else if($page == "cardiovascular" ) include '../patient/cardiovascular.php';
    else if($page == "right_catheter" ) include '../patient/right_catheter.php';
    else {include 'patients_search.php';}
  }
  else
  {
    header('Location: myaccount.php?page=patients');
    //echo '<div style=" height: 83%;"><img src="../../assets/images/404-not-found.gif"></div>';
  }
  include '../includes/footer.php';
} 
else{
  header('Location: ../../index.php'); 
}
?>
