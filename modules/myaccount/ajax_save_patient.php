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
    header('Location: ../myaccount/myaccount.php?page=profile');     
  }
  
?>