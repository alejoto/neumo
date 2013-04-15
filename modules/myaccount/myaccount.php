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
  else if($page == "basic") include '../patient/basic.php';
    else if($page == "blood") include '../patient/blood.php';
    else if($page == "diagnostic") include '../patient/diagnostic.php';
    else if($page == "cardiovascular" ) include '../patient/cardiovascular.php';
    else if($page == "right_catheter" ) include '../patient/right_catheter.php';
    else if($page == "edit" ) include '../patient/edit.php';
    else if($page == "t_patient" ) include '../tables/patient.php';
    else if($page == "t_arterialgasses" ) include '../tables/arterialgasses.php';
    else if($page == "t_cp_stress_test" ) include '../tables/cp_stress_test.php';
    else if($page == "t_dimer_trop" ) include '../tables/dimer_trop.php';
    else if($page == "t_drug_treatment" ) include '../tables/drug_treatment.php';
    else if($page == "t_duplex_legs" ) include '../tables/duplex_legs.php';
    else if($page == "t_ecocardio" ) include '../tables/ecocardio.php';
    else if($page == "t_electrok" ) include '../tables/electrok.php';
    else if($page == "t_first_eval" ) include '../tables/first_eval.php';    
    else if($page == "t_follow_up" ) include '../tables/follow_up.php';
    else if($page == "t_gammagr" ) include '../tables/gammagr.php';
    else if($page == "t_hb" ) include '../tables/hb.php';
    else if($page == "t_hemo_dim" ) include '../tables/hemo_dim.php';
    else if($page == "t_hemo_pept" ) include '../tables/hemo_pept.php';
    else if($page == "t_hemo_thyro" ) include '../tables/hemo_thyro.php';
    else if($page == "t_hemo_tropo" ) include '../tables/hemo_tropo.php';
    else if($page == "t_hepatic" ) include '../tables/hepatic.php';
    else if($page == "t_hyperclotting" ) include '../tables/hyperclotting.php';
    else if($page == "t_mri" ) include '../tables/mri.php';
    else if($page == "t_outcome" ) include '../tables/outcome.php';
    else if($page == "t_pep_natr" ) include '../tables/pep_natr.php';
    else if($page == "t_pulm_arteriography" ) include '../tables/pulm_arteriography.php';
    else if($page == "t_renal" ) include '../tables/renal.php';
    else if($page == "t_reuma" ) include '../tables/reuma.php';    
    else if($page == "t_reuma_ana" ) include '../tables/reuma_ana.php';
    else if($page == "t_reuma_anca" ) include '../tables/reuma_anca.php';
    else if($page == "t_reuma_antilip" ) include '../tables/reuma_antilip.php';
    else if($page == "t_reuma_citrul" ) include '../tables/reuma_citrul.php';
    else if($page == "t_reuma_enas" ) include '../tables/reuma_enas.php';
    else if($page == "t_reuma_spana" ) include '../tables/reuma_spana.php';    
    else if($page == "t_right_cathet" ) include '../tables/right_cathet.php';
    else if($page == "t_six_mins_walk" ) include '../tables/six_mins_walk.php';
    else if($page == "t_spirometry" ) include '../tables/spirometry.php';
    else if($page == "t_surgical" ) include '../tables/surgical.php';
    else if($page == "t_tc_angio" ) include '../tables/tc_angio.php';
    else if($page == "t_vasoreact_test" ) include '../tables/vasoreact_test.php';
    else if($page == "t_vih" ) include '../tables/vih.php';
    else if($page == "t_x_ray" ) include '../tables/x_ray.php';
    else include 'patients_search.php';
  
  include '../includes/footer.php';
}else{ 
  header('Location: ../../index.php'); 
}
?>
