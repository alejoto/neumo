<?
  $chunk = explode("-",$_SESSION['patient']);
  $names = array('Documento','Nombre','Apellidos','Genero','Nacimiento','Pais','Ciudad','Estado','Digitador');
  $chunk[4] = $chunk[4].'/'.$chunk[5].'/'.$chunk[6];
  
  $cont = 0;
  echo '<table>';
  for($i=0;$i<11;++$i){
    if( $i != 5 && $i != 6 ){
      echo '<tr><td style="border: ridge; padding-right: 25px; "><b>'.$names[$cont].'</b></td><td style="border: ridge;">'.$chunk[$i].'</td></tr>';
      $cont++;
    }
  }
  echo '</table>';
  
  echo '<br><br><a href="#" role="button" class="btn btn-success pull-right" style=""> Siguiente </a>';
?>