<?php 
session_start();
if(isset($_SESSION['evaluation'])) unset($_SESSION['evaluation']);
if(isset($_SESSION['patient'])) unset($_SESSION['patient']);
if(isset($_SESSION['hap_patient_id'])) unset($_SESSION['hap_patient_id']);
header ('location:myaccount.php?page=patients');

?>