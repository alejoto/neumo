<? 
  if(isset($_SESSION['patient'])) unset( $_SESSION['patient'] ); 
  if(isset($_SESSION['evaluation'])) unset($_SESSION['evaluation']);
  if(isset($_SESSION['hap_patient_id'])) unset($_SESSION['hap_patient_id']);
?>

<div class="container">
  <div class="row-fluid">
    <form  class="form-horizontal span5" style="text-align: left; margin-top: 30px;" onsubmit="return false">
      <div style=" height: 300px; margin-top: 40px; margin-bottom: -30px; margin-left: 5px;">
       <center><h1 style="color: #CC0000; font-family: 'Play', sans-serif; font-weight: 700;  ">RECOLHAP</h1>
       <br>
       <img src="../../assets/images/logo.png" style="width:150px; height: 125px; opacity:0.7; margin-top:0px auto;">
       <br>
       <p style="color: #686868; font-family: 'Oxygen', sans-serif; font-weight: 700;">
        <!-- <i class="icon-plus"></i> <i class="icon-group icon-2x"></i>-->
        <br>
        Registro Multic&eacute;ntrico Colombiano
        <br>
        de Hipertensi&oacute;n Arterial Pulmonar
      </p> 
    </center>
     <br>
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

    <div class="span6 offset1" style="border-left: ridge; height: 560px; " >
      <!-- ************************ -->
      <!-- First time patient       -->
      <div id="enterpatient">
        <div class="page-header" style="border: none; padding-left: 70px;">
          <!-- <h2>Registrar paciente</h2> -->
        </div>
        <div class="alert alert-info fade in" style="margin-left: 30px; margin-top: -15px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          Ingrese PACIENTE NUEVO o verifique documento.
          <h5>
            Es obligatorio ingresar los resultados del CATETERISMO 
            CARDIACO DERECHO para poder ingresar cualquier otro dato cl&iacute;nico
          </h5>
        </div>
        <div class="" style="margin-left:0px">
          
        </div>
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
            <div class="span12" style="padding-left:105px;text-align:left;color:#333333">
              Fecha nacimiento (aaaa/mm/dd)
            </div>
          </div>
          <div class="row">
            <div class="span12" style="padding-left:105px;text-align:left">
              <input type="text" id="year" name="year" placeholder="A&ntilde;o" class="span3" >
              <input type="text" id="month" name="month" placeholder="Mes" class="span3">
              <input type="text" id="day" name="day" placeholder="D&iacute;a" class="span3">
              <input type="text" id="wholedate" name="wholedate"  style="display:none">


            </div>
          </div>
          
          <input type="text" id="citybth" name="citybth" placeholder="Ciudad nacimiento"><br>  
          <input type="text" id="statebth" name="statebth" placeholder="Departamento"><br>
          <input type="text" id="countrybth" name="countrybth" placeholder="Pa&iacute;s de origen"><br><br>
          <div class="btn-group" id="group_save_patient" >
            <button type="submit" class="btn btn-info " id="save_patient" style="margin-left: 0px;">
              Guardar datos de paciente
              <i class="icon-circle-arrow-down"></i>
            </button>
            <!-- <button href="#" role="button" class="btn btn-info" style="">
             Datos adicionales 
             <i class="icon-plus-sign"></i>
           </button> -->

          </div>
            
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
    <script src="../../assets/js/medics.js"></script>
    <script src="../../assets/js/patients.js"></script>

  </div>
</div>