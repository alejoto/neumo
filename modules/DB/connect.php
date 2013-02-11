<?php

  //$con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  //$con = mysql_connect("localhost","root","root");
  $con = mysql_connect("localhost","root","ffx123456");
  //if (!$con) die('Could not connect: ' . mysql_error());
  //else echo 'connection succesfull', "\n";

  mysql_select_db("health", $con);
  
?>