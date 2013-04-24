<?php 
include '../../DB/connect.php';
$drug_treatment_id=$_POST['rowid'];
$drug_end=$_POST['col2val'];
$suspend_cause=$_POST['col1val'];
$table=$_POST['table'];

mysqli_query($con, "UPDATE $table SET 
drug_end = '$drug_end' , 
suspend_cause = '$suspend_cause'
WHERE drug_treatment_id ='$drug_treatment_id' "  );




echo $_POST['rowid'].$_POST['col1val'].$_POST['col2val'];



 ?>

