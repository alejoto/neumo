<? 
  if(isset($_SESSION['patient'])) unset( $_SESSION['patient'] ); 
  if(isset($_SESSION['evaluation'])) unset($_SESSION['evaluation']);
  if(isset($_SESSION['patient'])) unset($_SESSION['patient']);
  if(isset($_SESSION['hap_patient_id'])) unset($_SESSION['hap_patient_id']);
?>

<div class="container">
  <div class="row-fluid">
    <form  class="form-horizontal span5" style="text-align: left; margin-top: 30px;" onsubmit="return false">
      <div style=" height: 300px; margin-top: 40px; margin-bottom: -30px; margin-left: 5px;">
        <img src="../../assets/images/logo_temp.jpg" style="border-radius:25px 25px 25px 25px;">
      </div>

      <!-- ************************ -->
      <!-- select doc id section    -->
      <blockquote>
        <p>Selecciona tipo y n&uacute;mero de documento:</p>
      </blockquote><br>
      <div style="margin-left: 20px;">
        <div class="control-group" style="width: 300px;" >
          <div class="controls" style="margin-left: 0px;">
            <div id="idtypectr" class="input-prepend">
              <span class="add-on"><i class="icon-list-alt"></i></span>
              <select id="docid" >
                <option value="" >Tipo documento</option>
                <option value="cc">C&eacute;dula</option>
                <option value="rc">Registro Civil</option>
                <option value="ti">Tarjeta de Identidad</option>
                <option value="ce">C&eacute;dula Extranjera</option>
                <option value="pas">Pasaporte</option>
              </select>
            </div>
          </div>
        </div>
        <div class="control-group" style="width: 300px;" >
          <label class="control-label" for="idnumber"></label>
          <div class="controls" style="margin-left: 0px;">
            <div id="idnumberctr" class="input-prepend input-append">
              <span class="add-on"><i class="icon-user"></i></span>
              <input type="text" id="idnumber" placeholder="N&uacute;mero identidad"/>
              <button class="btn" type="button"> <i class="icon-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of select doc id     -->
      <!-- ************************ -->
    </form>

    <div class="span6 offset1" style="border-left: ridge; height: 560px; margin-top: 40px; " >

      <!-- ************************ -->
      <!-- First time patient       -->
      <div id="enterpatient">
        <div class="page-header" style="border: none; padding-left: 70px;">
          <!-- <h2>Registrar paciente</h2> -->
        </div>
        <h4 class="alert  fade in" style="margin-left: 70px; margin-top: -15px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          Documento no existe.  Ingrese PACIENTE NUEVO o verifique documento ingresado.
        </h4>
        <form action="ajax_save_patient.php" method="post" style="padding-left: 70px; text-align: center; margin-top: 40px;">
          <input type="text" id="docidnum" name="docidnum">        
          <input type="text" id="name" name="name" placeholder="Nombre completo"><br>
          <input type="text" id="surname" name="surname" placeholder="Apellidos"><br>
      
          <select id="gender" name="gender">
            <option value="">G&eacute;nero</option>
            <option value="male">Hombre</option>
            <option value="female">Mujer</option>
          </select><br>
          <div class="row">
            
            <div class="span12" style="padding-left:105px;text-align:left">
              <input type="text" id="year" name="year" placeholder="A&ntilde;o" class="span3" >
              <input type="text" id="month" name="month" placeholder="Mes" class="span3">
              <input type="text" id="day" name="day" placeholder="D&iacute;a" class="span3">
            </div>
          </div>
          <input type="text" id="citybth" name="citybth" placeholder="Ciudad nacimiento"><br>  
          <input type="text" id="statebth" name="statebth" placeholder="Departamento"><br>
          <input type="text" id="countrybth" name="countrybth" placeholder="Pa&iacute;s de origen"><br><br>

          <button type="submit" class="btn btn-primary" id="save_patient" style="margin-left: 0px;">Guardar</button>
          <a href="#" role="button" class="btn btn-success" style=""> Datos adicionales </a>
        </form>
      </div>
      <!-- End of First time patient-->
      <!-- ************************ -->

      <!-- ************************ -->
      <!-- Found patient (if exist) -->
      <div id="patientexist" style="padding-left: 70px; text-align: left; margin-top: 35px;">
      </div>
      <!-- end of "Found patient"   -->
      <!-- ************************ -->

    </div>
    <script src="../../assets/js/patients.js"></script>
  </div>
</div>
<script>
  $("#edit_patient").hide();
  $("#change_patient_btn").hide();
  
  // ¿Esto funciona?
  $(document).ready(function(){
    if ($('#docid').val()=="") { $('#docid').css("color","#CECECE"); }
    $('#docid').change(function(){
      if ($('#docid').val()==""){ $('#docid').css("color","#CECECE"); }
      else{ $('#docid').css("color","#494949"); }
    });
  });
  </script>