<?php 
include '../DB/connect.php';
session_start();
if (!isset($_SESSION['hap_patient_id'])||!isset($_SESSION['username'])) {
	header("location:myaccount.php?page=patients");
}
else {
$docidnum=$_SESSION['hap_patient_id'];
$digiter_id = $_SESSION['username'];

//adding event to table main eval
mysql_query("INSERT INTO main_eval (patient_id, digiter_id) VALUES ('$docidnum', '$digiter_id');");

//asjusting session variable for unique main eval id
$search_sql=("SELECT MAX(eval_id) FROM main_eval WHERE patient_id = '$docidnum' AND digiter_id = '$digiter_id'");
//select MAX ensueres to select latest eval id entered, filtered by user (digiter) and patient (doc_id)
$search_result = mysql_query($search_sql);
$eval_id_arr = mysql_fetch_array($search_result);

//asigning value to session, same variable as in file 'ajax_save_patient.php' in line 37 or near
$_SESSION['evaluation'] = $eval_id_arr[0];

//redirect to the main form
header('Location: myaccount.php?page=basic'); 
}
?>
