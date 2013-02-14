<?php 
include '../DB/connect.php';
if (isset($_POST['usr'])) {
	$usr=$_POST['usr'];
	$result = mysql_query("SELECT * FROM users WHERE user_id='$usr' ");
	$row = mysql_fetch_array($result);
	if ($row[0]=="") {
		echo "Usuario no existe, debe registrarse!";
	}
	else {
/*
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= 'From: Alejandro Toro<projectmanager@healmydisease.com>' . "\r\n";
		$content='<html><head><meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type"><title></title></head><body moz_template="id1" bgcolor="#ffffff" text="#000000">';
		$content .='<font face="Tahoma">';/**/
//echo $row['user_id'];
mail($row['user_id'],'Password Recovery','Forgotten password is '.$row['pwd'],"From:no_reply@healmydisease.com");

		?>
	
	Se envi&oacute; clave a su email

	<?php
		//echo $row[0];//pwd
	}





}



?>