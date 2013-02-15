<?
if (!isset($_GET['activate'])) {header("location:../../");}
else {
	include '../DB/connect.php';
	$activate=$_GET['activate'];
	$sql    = "SELECT * FROM users WHERE user_id='".$activate."'";
	$result = mysql_query($sql);
	$row    = mysql_fetch_array($result);
	if (mysql_num_rows($result)>0) {
		$valid_email=$row['status'];
		mysql_query("UPDATE users SET user_id='$valid_email', status='0' 
		WHERE user_id='$activate'");
		session_start();
		$_SESSION['username'] = $valid_email;
		header("location:../myaccount/myaccount.php?page=patients");
	}
	else {header("location:../../");}
}
?>