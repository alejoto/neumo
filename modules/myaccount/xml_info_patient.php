<?php
  $ruta_fichero = "../../temp_info/patient.xml";
  $contenido = ""; 
  if($da = fopen($ruta_fichero,"r")) {

    while ($aux= fgets($da,1024)) 
      $contenido.=$aux;
    fclose($da);

  }else
    echo "Error: no se ha podido leer el archivo <strong>$ruta_fichero</strong>";

  $tagnames = array ("patient","doc","name","surn","gender","birth","country","city","state","digiter"); 

  if (!$xml = domxml_open_mem($contenido)) {
    echo "Ha ocurrido un error al procesar el documento<strong> \"$ruta_fichero\"</strong> a XML <br>"; 
    exit; 
  }else{

    $raiz = $xml->document_element(); 

    $tam = sizeof($tagnames); 
    $main = $raiz->get_elements_by_tagname($tagnames[0]); 

    for($i=1; $i<$tam; $i++) {
      $nodo = $main->get_elements_by_tagname($tagnames[$i]); 
      $matriz[$i-1] = $nodo->get_content();  
    }

    //return $matriz; 

    $num_noticias=sizeof($matriz); 
    echo '<table border=1>';

    for($i=0;$i<$num_noticias;$i++)
      echo '<tr><td align=center>'.$matriz[$i].'</td></tr>';
      
    echo '</table><br>';

  }

?>