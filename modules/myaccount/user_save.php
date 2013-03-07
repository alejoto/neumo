<?php
session_start();
include '../DB/connect.php';

//set variables as empty
$ivt_name='';
$ivt_surname='';
$ivt_specialty='';
$ivt_mobile='';
$ivt_city='';

//set default country: Colombia
$ivt_country='COLOMBIA';

//set user id as session 'username'
$user_id=$_SESSION['username'];

//asign value with $_POST method
if (isset($_POST['ivt_name'])) {$ivt_name=$_POST['ivt_name'];} else {header('location:myaccount.php?page=user_register');}
if (isset($_POST['ivt_surname'])) {$ivt_surname=$_POST['ivt_surname'];} else {header('location:myaccount.php?page=user_register');}
if (isset($_POST['ivt_specialty'])) {$ivt_specialty=$_POST['ivt_specialty'];} else {header('location:myaccount.php?page=user_register');}
if (isset($_POST['ivt_mobile'])) {$ivt_mobile=$_POST['ivt_mobile'];} else {header('location:myaccount.php?page=user_register');}
if (isset($_POST['ivt_city'])) {$ivt_city=$_POST['ivt_city'];} else {header('location:myaccount.php?page=user_register');}

//Query database for user_id variable
$result = mysqli_query($con,"SELECT * FROM main_investigator WHERE user_id='$user_id'"  );  
$row    = mysqli_fetch_array($result);


if ($row[0] !="" || $row[0] !=null) 
{
//as user exist query updates info
	$sql="UPDATE main_investigator 
    SET ivt_name='$ivt_name'
    ,ivt_surname='$ivt_surname'
    ,ivt_specialty='$ivt_specialty'
    ,ivt_mobile='$ivt_mobile'
    ,ivt_city='$ivt_city'
    WHERE user_id='$user_id' ";
     if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } 
     else {header("location: myaccount.php?page=user_register&saved=yes");}

} 
else
{
	$sql="INSERT INTO main_investigator 
	        (ivt_name,ivt_surname,ivt_specialty,ivt_mobile,ivt_city,ivt_country,user_id)
     VALUES 
     ('$ivt_name','$ivt_surname','$ivt_specialty','$ivt_mobile','$ivt_city','$ivt_country','$user_id' )";
     if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } 
     else {header("location: myaccount.php?page=user_register&saved=yes");}
 }
 ?>