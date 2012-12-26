<div class="container">
  <div class="row-fluid">

    <form class="form-horizontal span5" style="text-align: left; margin-top: 30px;" >

      <div style=" height: 300px; background: #000000; margin-top: 10px; margin-bottom: 30px;"></div>

      <blockquote>
        <p>Selecciona tipo y numero de documento:</p>
        <small>Recuerda que lon datos corresponden solo a pacientes</small>
      </blockquote><br>

      <div style="margin-left: 20px;">
        <b>Tipo documento</b><br><br>
        <div class="control-group" style="width: 300px;" >
          <div class="controls" style="margin-left: 0px;">
            <select id="docid" >
              <option value=""></option>
              <option value="cc">Cédula</option>
              <option value="rc">Registro Civil</option>
              <option value="ti">Tarjeta de Identidad</option>
              <option value="ce">Cédula Extranjería</option>
              <option value="pas">Pasaporte</option>
            </select>
          </div>
        </div>

        <div class="control-group" style="width: 300px;" >
          <label class="control-label" for="idnumber"></label>
          <div class="controls" style="margin-left: 0px;">
            <div id="idnumberctr" class="input-append">
              <input type="text" id="idnumber" placeholder="Numero identidad">
              <button class="btn" type="button"><i class="icon-search"></i></button>
            </div>
          </div>
        </div>
      </div>

    </form>

    <div class="span6 offset1" style="border-left: ridge; height: 560px; margin-top: 40px; " >

      <div id="enterpatient">
        <h3 style="padding-left: 70px;"><u>Registro Pacientes</u></h3>
      
        <p style="color: red; padding: 10px 10px 10px 10px; margin-left: 70px; text-align: left; margin-top: 40px; margin-left: 70px; border: solid red 1px;">
          El paciente con el numero de identificacion especificado no existe si desea registrarlo llene los datos en el siguiente formulario
        </p>
        
        <form action="ajax_save_patient.php" method="post" style="padding-left: 70px; text-align: center; margin-top: 0px;">
          <input type="text" id="docidnum" name="docidnum" style="visibility: hidden;">        
          <input type="text" id="name" name="name" placeholder="Nombre completo"><br>
          <input type="text" id="surname" name="surname" placeholder="Apellidos"><br>
      
          <select id="gender" name="gender">
            <option value="">Genero</option>
            <option value="cc">Hombre</option>
            <option value="rc">Mujer</option>
          </select><br>
      
          <input type="text" id="year" name="year" placeholder="A&ntilde;o" class="span3" style="margin-left: -125px;">
          <input type="text" id="month" name="month" placeholder="Mes" class="span3">
          <input type="text" id="day" name="day" placeholder="Dia" class="span3"><br>

          <input type="text" id="citybth" name="citybth" placeholder="Ciudad nacimiento"><br>  
          <input type="text" id="statebth" name="statebth" placeholder="Departamento"><br>
          <input type="text" id="countrybth" name="countrybth" placeholder="Pais de origen"><br><br>

          <button type="submit" class="btn btn-primary" id="save_patient" style="margin-left: 0px;">Guardar</button>
          <a href="#" role="button" class="btn btn-success" style=""> Datos adicionales </a>
        </form>
      </div>
          
      
      <div id="patientexist">
        <h3 style="padding-left: 70px;"><u>Paciente</u></h3>
        <p style="color: green; padding: 10px 10px 10px 10px; margin-left: 70px; text-align: left; margin-top: 40px; margin-left: 70px; border: solid green 1px;">
          El paciente ya ha sido registrado con anterioridad si desea cotinuar a su historia clinica de click en siguiente.
        </p><br>
        
        <div style="padding-left: 70px; text-align: left;">
          <center>
            <? include 'info_patient.php'; ?>
          </center>
        </div>
        
      </div>
      
      <script src="../../assets/js/patients.js"></script>    

    </div>

  </div>

  <div id="footer" style="background:#3A3A3A;color:white; margin-top: 30px;">
    here we must write a minimalistic phrase for the footer
  </div>

</div>