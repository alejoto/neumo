<?
  ob_start();
  session_start();

  include '../DB/connect.php';
  
  $id = $_SESSION['evaluation'];
  $result = mysql_query("SELECT * FROM add_data_patient WHERE eval_id='$id' "  );  
  
  if( mysql_num_rows($result)>0 ) echo 'actualize';
  else echo 'inserte'
?>