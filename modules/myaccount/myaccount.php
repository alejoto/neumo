<?php
ob_start();
session_start();
if (isset($_GET["page"])) {$page = $_GET["page"];}
else {header('Location: myaccount.php?page=patients');}


//redirect to right catheter form if this is empty
if (isset($_SESSION['evaluation'])&&isset($_SESSION['hap_patient_id'])&&$page!='right_catheter') {
  include '../DB/connect.php';
  $docidnum=$_SESSION['hap_patient_id'];
$digiter_id = $_SESSION['username'];
//check if user has data on right catheter table
$result=mysql_query("SELECT * FROM hap_right_cathet LEFT JOIN main_eval 
  ON hap_right_cathet.eval_id= main_eval.eval_id WHERE main_eval.patient_id = '$docidnum'  ");
if (mysql_num_rows($result)==0) {
  header('Location: myaccount.php?page=right_catheter')
  ;}
}

//load pages according to $page value
 if(isset($_SESSION['username'])){
  
  include '../includes/header.php';
  
  if($page == "user_register") include 'user_register.php';
  else if($page == "patients") include 'patients_search.php';
  else if($page == "statistics") include '../statistics/statistics.php';
  else if( isset($_SESSION['patient']) ){
    if($page == "basic") include '../patient/basic.php';
    else if($page == "blood") include '../patient/blood.php';
    else if($page == "diagnostic") include '../patient/diagnostic.php';
    else if($page == "cardiovascular" ) include '../patient/cardiovascular.php';
    else if($page == "right_catheter" ) include '../patient/right_catheter.php';
    else if($page == "edit" ) include '../patient/edit.php';
    else include 'patients_search.php';
  }else include 'patients_search.php';
  
  include '../includes/footer.php';
}else{ 
  header('Location: ../../index.php'); 
}
?>
