<?php
  session_start();

  include '../DB/connect.php';

  $doc  = $_POST['doc'];

  $sql    = "SELECT * FROM main_patient WHERE patient_id='".$doc."'";
  $result = mysql_query($sql);
  $row    = mysql_fetch_array($result);

  if( mysql_num_rows($result)>0 ){ 

    $xml = new DOMDocument('1.0');
    $xml->formatOutput = true;

    $root = $xml->createElement('patient');
    $root = $xml->appendChild($root);
    
    $doc_id = $xml->createElement('doc');
    $doc_id = $root->appendChild($doc_id);
    $text = $xml->createTextNode($row[0]);
    $text = $doc_id->appendChild($text);
    
    $name = $xml->createElement('name');
    $name = $root->appendChild($name);
    $text = $xml->createTextNode($row[2]);
    $text = $name->appendChild($text);

    $surn = $xml->createElement('surn');
    $surn = $root->appendChild($name);
    $text = $xml->createTextNode($row[3]);
    $text = $surn->appendChild($text);

    $gender = $xml->createElement('gender');
    $gender = $root->appendChild($gender);
    $text = $xml->createTextNode($row[4]);
    $text = $gender->appendChild($text);

    $birthd = $xml->createElement('birth');
    $birthd = $root->appendChild($birthd);
    $text = $xml->createTextNode($row[5]);
    $text = $birthd->appendChild($text);

    $countrybth = $xml->createElement('country');
    $countrybth = $root->appendChild($countrybth);
    $text = $xml->createTextNode($row[6]);
    $text = $countrybth->appendChild($text);

    $citybth = $xml->createElement('city');
    $citybth = $root->appendChild($citybth);
    $text = $xml->createTextNode($row[7]);
    $text = $citybth->appendChild($text);
    
    $statebth = $xml->createElement('state');
    $statebth = $root->appendChild($statebth);
    $text = $xml->createTextNode($row[8]);
    $text = $statebth->appendChild($text);
    
    $digiter_id = $xml->createElement('digiter');
    $digiter_id = $root->appendChild($digiter_id);
    $text = $xml->createTextNode($row[9]);
    $text = $digiter_id->appendChild($text);

    $xml->save("../../temp_info/patient.xml");
    
    echo 'yes';    
  
  }else echo 'no';
  
  mysql_close($con);

?>