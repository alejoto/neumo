<?php
  // 0 0 1 Jan,Apr,Jul,Oct * curl "http://www.recolhap.com/modules/DB/trimestral_emails.php"
  include 'connect.php';
  include 'email_format.php';
  
  $sql_users_mails = "SELECT * FROM users";
  $users = mysqli_query($con,$sql_users_mails);

  while( $user = mysqli_fetch_array($users) ){
    $user_email = $user['user_id'];
    $sql_num_patients = "SELECT COUNT(patient_id) FROM main_patient WHERE digiter_id='$user_email' and timestamp>( CURRENT_TIMESTAMP-INTERVAL '3' MONTH)";
    $num_patients = mysqli_fetch_array( mysqli_query($con, $sql_num_patients) );
    send_email($user_email, "Reporte trimestral - Recolhap", "Usted a registrado ".$num_patients[0]." paciente(s) durante los ultimos 3 meses");
  }
?>