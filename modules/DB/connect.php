<?php
  //$con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  
  $con = mysql_connect("localhost","root","root");  /*temporary user and pwd attr*/

  //$con = mysql_connect("localhost","healmy5_root","laravel");

  //if (!$con) die('Could not connect: ' . mysql_error());
  //else echo 'connection succesfull', "\n";

  //mysql_select_db("healmy5_health", $con);
  
  mysql_select_db("health", $con);  /*temporary user and pwd attr*/
  
?>
