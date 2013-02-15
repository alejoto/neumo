<?php

  include '../DB/connect.php';
  //echo "Antes de esto";
  $info  = $_POST['info']; // Ejemplo: patient_id,timestamp,name,etc?'1','1999-12-01 12:00:00','Jhon'
  $table  = $_POST['table'];
  //echo $info;
  $pieces = explode("?", $info);  // La primera pieza son los nombres, la segunda los grupos de valores unidos por =
  $sql = "INSERT INTO ".$table." (".$pieces[0].") VALUES ('" . implode("', '", explode(",", $pieces[1])) . "')";
  //echo $sql;/*  
  if( !mysql_query($sql,$con) ){
    echo 'No';
    die('Error: ' . mysql_error());
  }

  mysql_close($con);    
  echo 'Yes';
  
?>
