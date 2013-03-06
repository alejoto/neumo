<?
  ob_start();
  session_start();
  if (isset($_POST['mobile'])){$mobile=$_POST['mobile'];}
if (isset($_POST['phone'])){$phone=$_POST['phone'];}
if (isset($_POST['eps'])){$eps=$_POST['eps'];}
if (isset($_POST['countryreside'])){$countryreside=$_POST['countryreside'];}
if (isset($_POST['cityreside'])){$cityreside=$_POST['cityreside'];}


/*



/**/

  include '../DB/connect.php';
  
  $id = $_SESSION['hap_patient_id'];
  $result = mysqli_query($con,"SELECT * FROM add_data_patient WHERE pte_id='$id' "  );  
  $row    = mysqli_fetch_array($result);

  if ($row[0] !="" || $row[0] !=null) 
  {
/*
"UPDATE Persons SET Age=36
WHERE FirstName='Peter' AND LastName='Griffin'");


/**/

  	$sql="UPDATE add_data_patient 
  	SET mobile='$mobile'
  	,phone='$phone'
  	,eps='$eps'
  	,countryreside='$countryreside'
  	,cityreside='$cityreside'
  	,patient_id='$id' 
  	WHERE pte_id='$id' ";
  	 if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } 
  	 else {header("location: ../myaccount/myaccount.php?page=edit&saved='yes' ");}
  	
  } 

  else {
  	$sql="INSERT INTO add_data_patient (mobile,phone,eps,countryreside,cityreside,patient_id)
  	 VALUES ('$mobile','$phone','$eps','$countryreside','$cityreside',' $id ' )";
  	 if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } 
  	 else {header("location: ../myaccount/myaccount.php?page=edit&saved='yes' ");}


  }



?>