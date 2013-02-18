<?
  include '../DB/connect.php';
  
  $id = $_SESSION['evaluation'];
  $result = mysql_query("SELECT * FROM add_data_patient WHERE eval_id='$id' "  );  
  
  $datos = array_fill(0, 9, "");
  $datos[0] = date("Ymd");
  
  /*
    timestamp
    mobile
    phone
    eps
    insurancetype
    countryreside
    cityreside
    statereside
    clinrecordnum
  */

  if( mysql_num_rows($result)>0 ){ 
    $row = mysql_fetch_array($result);
    $datos[1] = $row['mobile'];
    $datos[2] = $row['phone'];
    $datos[3] = $row['eps'];
    $datos[4] = $row['insurancetype'];
    $datos[5] = $row['countryreside'];
    $datos[6] = $row['cityreside'];
    $datos[7] = $row['statereside'];
    $datos[8] = $row['clinrecordnum'];
  }
  
  echo '<br><br>Estos son los datos del paciente actual: <br><br>';
  echo '<form action="../patient/edit_save.php" method="post" >';
  echo 'Mobile: <input type="text" value="'.$datos[1].'"><br>';
  echo 'Phone: <input type="text" value="'.$datos[2].'"><br>';
  echo 'Eps: <input type="text" value="'.$datos[3].'"><br>';
  echo 'insuranceType: <input type="text" value="'.$datos[4].'"><br>';
  echo 'countryReside: <input type="text" value="'.$datos[5].'"><br>';
  echo 'cityReside: <input type="text" value="'.$datos[6].'"><br>';
  echo 'stateReside: <input type="text" value="'.$datos[7].'"><br>';
  echo 'clinrecordnum: <input type="text" value="'.$datos[8].'"><br>';
  echo '<button type="submit">Actualizar</button>';
  echo '</form>';
  echo '<br><br>';
  
  mysql_close($con);
  
?>