<?php

	include '../DB/connect.php';
  session_start();

  // Insert the eval into the patient

  $user = $_SESSION['username'];
  $patient = $_SESSION['patient'];

  // Get the patient_id from the $patient
  $split = explode("?",$patient); 
  $patient_id = $split[0];

  $insert = "INSERT INTO main_eval (patient_id,digiter_id) VALUES ('$patient_id','$user');";

  if( !mysql_query($insert,$con)){
    echo "No";
	  die ('Error: '.mysql_error());
  }

  //// End of insert into main_eval ////

  
  $info = $_POST['info']; // Ejemplo: patient_id,timestamp,name,etc?'1','1999-12-01 12:00:00','Jhon'
  $table = $_POST['table'];

  $pieces = explode("?", $info); // La primera pieza son los nombres, la segunda los grupos de valores unidos por =
  $sql = "INSERT INTO ".$table." (".$pieces[0].") VALUES ('" . implode("', '", explode(",", $pieces[1])) . "')";
  
  if( !mysql_query($sql,$con) ){
    echo 'No';
    die('Error: ' . mysql_error());
  }

  mysql_close($con);
  echo 'Yes';
  
?>
