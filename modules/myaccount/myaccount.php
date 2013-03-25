<?php
ob_start();
session_start();
include '../DB/connect.php';



if (isset($_GET["page"])) {$page = $_GET["page"];}
else {header('Location: myaccount.php?page=patients');}

//Redirect if doctor data is empty
$user_id=$_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM main_investigator WHERE user_id='$user_id'"  );  
$row    = mysqli_fetch_array($result);
if ($row['user_id']==""&&$_GET["page"]!='user_register') { header('Location: myaccount.php?page=user_register'); }


//redirect to right catheter form if this is empty
 if (isset($_SESSION['evaluation'])&&isset($_SESSION['hap_patient_id'])&&$page!='right_catheter') 
{
  
  $docidnum=$_SESSION['hap_patient_id'];
  $digiter_id = $_SESSION['username'];

  //check if user has data on right catheter table
  $result=mysqli_query($con,"SELECT * FROM hap_right_cathet LEFT JOIN main_eval  
    ON hap_right_cathet.eval_id= main_eval.eval_id WHERE main_eval.patient_id = '$docidnum'  ");
  $row    = mysqli_fetch_array($result);

  // Redirect if right cath is empty
  if ($row[0] =="" || $row[0] ==null) {
    header('Location: myaccount.php?page=right_catheter');
  }
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
    else if($page == "tpatient" ) include '../tables/patient.php';
    else include 'patients_search.php';
  }else include 'patients_search.php';
  
  include '../includes/footer.php';
}else{ 
  header('Location: ../../index.php'); 
}
?>
