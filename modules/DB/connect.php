<?php

  $con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  //if (!$con) die('Could not connect: ' . mysql_error());
  //else echo 'connection succesfull', "\n";

  mysql_select_db("hiapulco", $con);
  
?>