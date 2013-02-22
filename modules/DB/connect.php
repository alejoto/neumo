<?php
  //$con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  
  $con = mysql_connect("localhost","root","root");  /*temporary user and pwd attr*/

  //$con = mysql_connect("localhost","healmy5_root","laravel");

  //if (!$con) die('Could not connect: ' . mysql_error());
  //else echo 'connection succesfull', "\n";
  //mysql_select_db("healmy5_health", $con);
  
  mysql_select_db("health", $con);  /*temporary user and pwd attr*/
  $sql=mysql_query("SELECT status FROM users");
  if (!$sql){ mysql_query("ALTER TABLE users ADD status VARCHAR(60) AFTER rol");}

	
	$sql=mysql_query("SELECT improved_symts FROM hap_follow_up");
	if (!$sql){ mysql_query("ALTER TABLE hap_follow_up ADD improved_symts VARCHAR(60) AFTER syncope");}

  $sql=mysql_query("SELECT pres_art_exfco FROM hap_follow_up");
  if (!$sql){ mysql_query("ALTER TABLE hap_follow_up ADD pres_art_exfco VARCHAR(60) AFTER pulse");}
?>
