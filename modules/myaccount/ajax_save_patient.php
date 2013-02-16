<?php
  ob_start();
  session_start();
  include '../DB/connect.php';
  
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $citybth = $_POST['citybth'];
  $countrybth = $_POST['countrybth'];
  $user_id = $_SESSION['username'];
  $docidnum = $_POST['docidnum'];
  $birthd = $year.'-'.$month.'-'.$day;
  $statebth = $_POST['statebth'];
  $actual_date = date('Y-m-d', time());
    
  if( !$gender || !$name || !$surname || !$year || !$month || !$day || !$citybth || !$countrybth ){
    header('Location: ../myaccount/myaccount.php?page=patients'); 
  }else{
    mysql_query("INSERT INTO main_patient (patient_id, timestamp, name, surn, gender, birthd, countrybth, citybth, statebth, digiter_id) VALUES ('".$docidnum."', '".$actual_date."', '".$name."', '".$surname."', '".$gender."', '".$birthd."', '".$countrybth."', '".$citybth."', '".$statebth."', '".$user_id."')");

		/// In this part when the patient is add to the data base, also it's recorded the main_eval, to keep the conection between the doctor and the patient 
		
		$digiter_id = $_SESSION['username'];
		mysql_query("INSERT INTO main_eval (patient_id, digiter_id) VALUES ('$docidnum', '$digiter_id');"); 
		
		// Search for the generated ID

		$search_sql=("SELECT eval_id FROM main_eval WHERE patient_id = '$docidnum' AND digiter_id = '$digiter_id'");
		$search_result = mysql_query($search_sql);
		$eval_id_arr = mysql_fetch_array($search_result);
		$_SESSION['evaluation'] = $eval_id_arr[0];

    $patient = $docidnum."-".$name."-".$surname."-";
    $patient .= $gender."-".$birthd."-".$countrybth."-";
    $patient .= $citybth."-".$statebth."-".$user_id;
    
    $_SESSION['patient'] = $patient;
    header('Location: ../myaccount/myaccount.php?page=profile');     
  }
  
?>
