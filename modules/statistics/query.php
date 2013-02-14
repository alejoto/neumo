<?php
  session_start();

  include '../DB/connect.php';

  $info  = $_POST['info'];
  $exit = true;

  if($info == "pacientes"){
    $sql    = "SELECT * FROM main_patient";
    $result = mysql_query($sql); 
    
    $temp = array(0,0,0,0,0,0,0,0,0,0,0,0);
    while( $row = mysql_fetch_array($result) ){
      $tales = explode("-", $row['timestamp']);
      if( $tales[0] == "2013" ){
        $temp[ intval($tales[1])-1 ]++;
      }
    }
  }
  
  if($info == "genero"){
    $sql    = "SELECT * FROM main_patient";
    $result = mysql_query($sql);
    
    $temp = array(0,0);
    while( $row = mysql_fetch_array($result) ){
      if( $row['gender'] == 'rc' ) $temp[0]++;
      else $temp[1]++;
    }
  }

  if($info == "edades"){
    $sql    = "SELECT * FROM main_patient";
    $result = mysql_query($sql);
    
    $temp = array(0,0,0,0,0,0,0,0);
    while( $row = mysql_fetch_array($result) ){
      $ti = explode("-", $row['birthd']);
      $ageTime = mktime(0, 0, 0, intval($ti[2]), intval($ti[1]), intval($ti[0]));
      $age = floor( (time() - $ageTime) / (60*60*24*365) );
      if( (($age/10)-1) < 8 ) $temp[($age/10)-1]++;
    }
  }
  
  if($info == "afroamerican"){
    $sql    = "SELECT * FROM hap_first_eval";
    $result = mysql_query($sql);
    
    $temp = array(0,0);
    while( $row = mysql_fetch_array($result) ){
      if($row['afroamerican'] == 'no') $temp[0]++;
      else $temp[1]++;
    }
  }

  if($info == "funcional"){
    $sql    = "SELECT * FROM hap_follow_up";
    $result = mysql_query($sql);
    
    //$temp = array_fill(4, 0, 0);
    $temp = array(0,0,0,0);
    while( $row = mysql_fetch_array($result) ){
      $fc = $row['nyha_funct_class']; // functional class
      if( $fc == 'i') $temp[0]++;
      else if( $fc == 'ii') $temp[1]++;
      else if( $fc == 'iii') $temp[2]++;
      else if( $fc == 'iv') $temp[3]++;      
    }
  }
  
  if($info == "funcional_tiempo"){
    $sql    = "SELECT * FROM hap_follow_up";
    $result = mysql_query($sql);
    
    $func = array(array(), array(), array(), array());
    $func[0] = array_fill(0, 36, 0);
    $func[1] = array_fill(0, 36, 0);
    $func[2] = array_fill(0, 36, 0);
    $func[3] = array_fill(0, 36, 0);

    while( $row = mysql_fetch_array($result) ){
      $fc = $row['nyha_funct_class']; // functional class
      
      /*
      $act_date = $row['eval_date'];
      $sql2 = "SELECT * FROM hap_follow_up WHERE eval_id = '".$act_date"' ";
      $result2 = mysql_query($sql);
      while( $row = mysql_fetch_array($result) ){
      }
      */
      $month = 2; //$row['eval_date']; // restarle el inicial osea minimo de toda la tabla con el mismo eval_id

      if( $fc == 'i')   $a_id = 0;
      if( $fc == 'ii')  $a_id = 1;
      if( $fc == 'iii') $a_id = 2;
      if( $fc == 'iv')  $a_id = 3;

      $func[$a_id][$a_id]++;
    }
    
    // rellenar los arreglos los 0's con el anterior valor que sea diferente de 0
    $exit = false;
    $serialized_result = implode(",",$func[0])."?".
                         implode(",",$func[1])."?".
                         implode(",",$func[2])."?".
                         implode(",",$func[3]);
    $serialized_result = str_replace(" ", "", $serialized_result);
  }

  if($exit) $serialized_result = implode(",",$temp);
  echo $serialized_result;

  mysql_close($con);

?>