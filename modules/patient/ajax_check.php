<?php

	include '../DB/connect.php';
  session_start();

  $table = $_POST['table_name']; // Ejemplo: patient_id,timestamp,name,etc?'1','1999-12-01 12:00:00','Jhon'
  $column = $_POST['column_name'];
  $date = $_POST['date'];
  
	$eval_id = $_SESSION['evaluation'];
	$sql1 = "SELECT k.".$column." FROM main_eval p, ".$table." k WHERE p.eval_id = k.eval_id AND k.".$column." = '".$date."';";
  $result = mysqli_query($con,$sql1);
  $row 		= mysqli_fetch_array($result);
	if( !mysqli_query($con,$sql1) ){
    echo 'No';
    die('Error: ' . mysql_error());
  }
  elseif ($row){
  }
  else{
  	echo "free";
  }

  mysqli_close($con);
  
?>