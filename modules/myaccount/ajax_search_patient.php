<?php
  session_start();

  include '../DB/connect.php';

  $doc  = $_POST['doc'];

  $sql    = "SELECT * FROM main_patient WHERE patient_id='".$doc."'";
  $result = mysql_query($sql);
  $row    = mysql_fetch_array($result);

  if( mysql_num_rows($result)>0 ){ 

    $patient = "";
    
    for($i=0;$i<10; ++$i){
      if($i != 1){
        $patient .= $row[$i];
        if( $i<9 ) $patient .= "?";
      }
    }
    
    //$patient = str_replace("&Iacute;","Í",$patient);
    
    $_SESSION['patient'] = $patient;
    echo $patient;
  
  }else echo 'no';
  
  mysql_close($con);

?>