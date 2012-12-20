<?php
  session_start();

  include '../DB/connect.php';

  $doc  = $_POST['doc'];

  $sql    = "SELECT * FROM main_patient WHERE patient_id='".$doc."'";
  $result = mysql_query($sql);
  $row    = mysql_fetch_array($result);

  if( mysql_num_rows($result)>0 ) echo 'yes';    
  else echo 'no';
  
  mysql_close($con);

?>