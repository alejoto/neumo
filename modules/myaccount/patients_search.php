<? unset( $_SESSION['patient'] ); ?>

<div class="container">
  <div class="row-fluid">

    <form  class="form-horizontal span5" style="text-align: left; margin-top: 30px;" onsubmit="return false">


      <div style=" height: 300px; margin-top: 40px; margin-bottom: -30px; margin-left: 5px;">
        <img src="../../assets/images/logo_temp.jpg" style="border-radius:25px 25px 25px 25px;">
      </div>

      <blockquote>
        <p>Selecciona tipo y n&uacute;mero de documento:</p>
        <small>Recuerda que los datos corresponden solo a pacientes</small>
      </blockquote><br>

      <div style="margin-left: 20px;">
        <b>Tipo documento</b><br><br>
        <div class="control-group" style="width: 300px;" >
          <div class="controls" style="margin-left: 0px;">
            <select id="docid" >
              <option value=""></option>
              <option value="cc">C&eacute;dula</option>
              <option value="rc">Registro Civil</option>
              <option value="ti">Tarjeta de Identidad</option>
              <option value="ce">C&eacute;dula Extranjera</option>
              <option value="pas">Pasaporte</option>
            </select>
          </div>
        </div>

        <div class="control-group" style="width: 300px;" >
          <label class="control-label" for="idnumber"></label>
          <div class="controls" style="margin-left: 0px;">
            <div id="idnumberctr" class="input-append">
              <input type="text" id="idnumber" placeholder="N&uacute;mero identidad"/>
              <button class="btn" type="button"><i class="icon-search"></i></button>
            </div>
          </div>
        </div>
      </div>

    </form>

    <div class="span6 offset1" style="border-left: ridge; height: 560px; margin-top: 40px; " >

      <div id="enterpatient">
        <div class="page-header" style="border: none; padding-left: 70px;">
          <h2><u>Registro de pacientes</u></h2>
        </div>
                
        <div class="alert alert-error fade in" style="margin-left: 70px; margin-top: -15px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          El paciente con el n&uacute;mero de identificaci&oacute;n especificado no existe si desea registrarlo llene sus datos en el siguiente formulario
        </div>
        
        
        <form action="ajax_save_patient.php" method="post" style="padding-left: 70px; text-align: center; margin-top: 40px;">
          <input type="text" id="docidnum" name="docidnum">        
          <input type="text" id="name" name="name" placeholder="Nombre completo"><br>
          <input type="text" id="surname" name="surname" placeholder="Apellidos"><br>
      
          <select id="gender" name="gender">
            <option value="">G&eacute;nero</option>
            <option value="cc">Hombre</option>
            <option value="rc">Mujer</option>
          </select><br>
      
          <input type="text" id="year" name="year" placeholder="A&ntilde;o" class="span3" style="margin-left: -125px;">
          <input type="text" id="month" name="month" placeholder="Mes" class="span3">
          <input type="text" id="day" name="day" placeholder="D&iacute;a" class="span3"><br>

          <input type="text" id="citybth" name="citybth" placeholder="Ciudad nacimiento"><br>  
          <input type="text" id="statebth" name="statebth" placeholder="Departamento"><br>
          <input type="text" id="countrybth" name="countrybth" placeholder="Pa&iacute;s de origen"><br><br>

          <button type="submit" class="btn btn-primary" id="save_patient" style="margin-left: 0px;">Guardar</button>
          <a href="#" role="button" class="btn btn-success" style=""> Datos adicionales </a>
        </form>
      </div>
          
      
      <div id="patientexist">
                
        <div class="page-header" style="border: none; padding-left: 70px;">
          <h1><u>Paciente</u><br> <small>Informaci&oacute;n Pertinente</small></h1>
        </div>
        
        <div class="alert alert-success fade in" style="margin-left: 70px; margin-top: -15px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          El paciente ya ha sido registrado si desea continuar a su historia cl&iacute;nica de click en siguiente.
        </div>
        
        <div style="padding-left: 70px; text-align: left; margin-top: 35px;">
          <center>
            <? include 'info_patient.php'; ?>
          </center>
        </div>
        
      </div>
      
      <script src="../../assets/js/patients.js"></script>    
 
    </div>

  </div>

</div>

<script>
  $("#edit_patient").hide();
</script>