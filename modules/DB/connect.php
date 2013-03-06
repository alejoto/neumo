<?php
  //$con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  
  //$con = mysql_connect("localhost","root","root");  /*temporary user and pwd attr*/

  $con=mysqli_connect("localhost","root","root","health");

  //$con = mysql_connect("localhost","healmy5_root","laravel");

  //if (!$con) die('Could not connect: ' . mysql_error());
  //else echo 'connection succesfull', "\n";
  //mysql_select_db("healmy5_health", $con);
  
  //mysql_select_db("health", $con);  /*temporary user and pwd attr*/

  /*
$result = mysqli_query($con,"SELECT * FROM main_patient WHERE patient_id='$docid' "  );
$row = mysqli_fetch_array($result);

  */

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $sql=mysqli_query($con,"SELECT status FROM users");
  if (!$sql){ mysqli_query($con,"ALTER TABLE users ADD status VARCHAR(60) AFTER rol");}

	
	$sql=mysqli_query($con,"SELECT improved_symts FROM hap_follow_up");
	if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD improved_symts VARCHAR(60) AFTER syncope");}

  $sql=mysqli_query($con,"SELECT pres_art_exfco FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD pres_art_exfco VARCHAR(60) AFTER pulse");}

  $sql=mysqli_query($con,"SELECT ing_yu FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD ing_yu VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT ef_edema FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD ef_edema VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT hepatomegaly FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD hepatomegaly VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT cardiac_index FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD cardiac_index VARCHAR(60) AFTER cardiac_outp");}

  $sql=mysqli_query($con,"SELECT rt_ventr_oxim FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD rt_ventr_oxim VARCHAR(60) AFTER rt_atr_oxim");}

  $sql=mysqli_query($con,"SELECT pulm_artery FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD pulm_artery VARCHAR(60) AFTER rt_ventr_oxim");}

  $sql=mysqli_query($con,"SELECT legsdoppler_result_left FROM hap_duplex_legs");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_duplex_legs ADD legsdoppler_result_left VARCHAR(60) AFTER legsdoppler_date");}

  $sql=mysqli_query($con,"SELECT legsdoppler_result_right FROM hap_duplex_legs");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_duplex_legs ADD legsdoppler_result_right VARCHAR(60) AFTER legsdoppler_result_left");}

  $sql=mysqli_query($con,"SELECT post_cardiac_index FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_cardiac_index VARCHAR(60) AFTER post_cardiac_outp");}

  $sql=mysqli_query($con,"SELECT post_rt_ventr_oxim FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_rt_ventr_oxim VARCHAR(60) AFTER post_cardiac_index");}

  $sql=mysqli_query($con,"SELECT post_pulm_artery FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_pulm_artery VARCHAR(60) AFTER post_rt_ventr_oxim");}

  $sql=mysqli_query($con,"SELECT patient_id FROM add_data_patient");
  if (!$sql){ mysqli_query($con,"ALTER TABLE add_data_patient ADD patient_id VARCHAR(60) AFTER eval_id");}


?>
