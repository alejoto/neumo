<?
  $names = array('Documento','Nombre','Apellidos','Genero','Nacimiento','Pais','Ciudad','Estado','Digitador');  
  $cont = 0;
  
  echo '<table>';
  for($i=0;$i<11;++$i){
    if( $i != 5 && $i != 6 ){
      echo '<tr>
              <td style="border: ridge; padding-right: 25px; "><b>'.$names[$cont].'</b></td>
              <td style="border: ridge;" id="patient_'.$cont.'"></td>
            </tr>';
      $cont++;
    }
  }
  echo '</table><br><br>';
  echo '<a href="myaccount.php?page=profile" role="button" class="btn btn-primary"> Editar Paciente </a>';
  echo '<a href="myaccount.php?page=profile" role="button" class="btn btn-success"> Siguiente </a>';
?>