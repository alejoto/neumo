<?php 
include '../DB/connect.php';
session_start();
$eval_id=$_SESSION['evaluation'];
$ptn=$_SESSION['hap_patient_id'];
$afroamerican=$_POST['afroamerican'];
$dxdate=$_POST['dxdate'];
$eval_date=$_POST['eval_date'];
$nyha_funct=$_POST['nyha_funct'];
$dyspnea=$_POST['dyspnea'];
$cough=$_POST['cough'];
$chestpain=$_POST['chestpain'];
$loweredema=$_POST['loweredema'];
$hemoptysis=$_POST['hemoptysis'];
$syncope=$_POST['syncope'];
$improved_symts=$_POST['improved_symts'];

if ($_POST['afroamerican']!=''&&$_POST['dxdate']!='') { mysql_query("INSERT INTO hap_first_eval (afroamerican,dxdate,eval_id) values ('$afroamerican','$dxdate','$eval_id')");}

mysql_query("INSERT INTO hap_follow_up (
eval_date
,dyspnea
,cough
,chestpain
,loweredema
,hemoptysis
,syncope
,improved_symts
,nyha_funct
,eval_id
) values (
'$eval_date'
,'$dyspnea'
,'$cough'
,'$chestpain'
,'$loweredema'
,'$hemoptysis'
,'$syncope'
,'$improved_symts'
,'$nyha_funct'
,'$eval_id'
)
");
?>