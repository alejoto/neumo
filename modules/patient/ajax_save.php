<?php

  include '../DB/connect.php';

  $info  = $_POST['info'];
  $table  = $_POST['table'];

  $pieces = explode("?", $info);  
    
  $sql = "INSERT INTO '".$table."' (";
  $sql2 = ") VALUES (";
  for( $i=0; $i<count($pieces); $i++ ){
    $val = explode("=", $pieces[$i]);
    $sql .= ($val[0].",");
    $sql2 .= "'".$val[1]."', ";
  }
  $sql2 .= ")";
  
  $result = mysql_query($sql.$sql2);
  
  /*
  Ejemplo 
  
  mysql_query("INSERT INTO main_patient (patient_id, timestamp, name, surn, gender, birthd, countrybth, citybth, statebth, digiter_id) VALUES ('".$docidnum."', '".$actual_date."', '".$name."', '".$surname."', '".$gender."', '".$birthd."', '".$countrybth."', '".$citybth."', '".$statebth."', '".$user_id."')");
  */
  
  echo 'yes';
  
?>