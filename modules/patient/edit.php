<?
  include '../DB/connect.php';
  
  $id = $_SESSION['hap_patient_id'];
  
  $result3 = mysqli_query($con,"SELECT * FROM add_data_patient WHERE pte_id='$id'");  
  $row3 = mysqli_fetch_array($result3);
  


  $mobile="";
  $phone = "";
  $eps = "";
  $countryreside = "";
  $cityreside = "";

  //Title if complementary data is empty (input data for first time)
  $additionaldata_message='Ingrese datos faltantes del paciente';


  if ($row3[0] !="" || $row3[0] !=null){ 
    
    $mobile = $row3['mobile'];
    $phone = $row3['phone'];
    $eps = $row3['eps'];
    $countryreside = $row3['countryreside'];
    $cityreside = $row3['cityreside'];


    //Title if complementary data exist (edit data)
    $additionaldata_message='Edite datos del paciente';

  }
  
  if (isset($_GET['saved'] )) {
    $additionaldata_message='Datos exitosamente actualizados';

?>
<div class="container " style="text-align:left">
    <div class="row">
      <br/>
      <br/>
      <br/>
      <div class="offset3 span7 alert alert-success">
        <div class="row">
          <?php  include '../includes/info.php';  ?>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
        </div>
        <div class="row">
          <div class="offset1 span6">
            <h4><?php echo $additionaldata_message;?></h4>
          </div>
        </div>
        <div class="row">
          <div class="span3" style="text-align:right;">Celular</div>
          <div class="span4"> <?php echo  $mobile; ?> </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align:right;">Tel&eacute;fono</div>
            <div class="span4"><?php echo  $phone; ?> </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align:right;">EPS</div>
            <div class="span4"> <?php echo  $eps; ?> </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align:right;">Pa&iacute;s de residencia</div>
            <div class="span4"> <?php echo  $countryreside; ?> </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align:right;">Cuidad de residencia</div>
            <div class="span4"> <?php echo  $cityreside; ?> </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="offset4 span5"><h4>Volver a formularios cl&iacute;nicos</h4></div>
    </div>
    <div class="row">
      <div class="offset4 span4 btn-group btn-group-vertical">
        <a href='myaccount.php?page=basic' class='btn btn-inverse'>DATOS CLINICOS</a>
        <a href='myaccount.php?page=blood' class='btn btn-inverse'>PRUEBAS EN SANGRE</a>
        <a href='myaccount.php?page=diagnostic' class='btn btn-inverse'>IMAGENES CLINICAS</a>
        <a href='myaccount.php?page=cardiovascular' class='btn btn-inverse'>DESEMPENO CARDIOVASCULAR</a>
      </div>
    </div>
  </div>

  <?php }
  else {  ?>

  <div class="container" style="text-align:left">
    <div class="row">
      <br/>
      <br/>
      <br/>
      <div class="offset3 span9">
        <div class="row">
          <?php  include '../includes/info.php';  ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class='offset3 span9'>
        <h4><?php echo $additionaldata_message;?></h4>
        <form action="../patient/edit_save.php" method="post">
          <div class="row">
            <div class="span2" style="text-align:right;padding-top:5px">Celular</div>
            <div class="span7"><input type="text" name='mobile' <?php echo  'value="'.$mobile.'"'; ?> placeholder="Mobile"></div>
          </div>
          <div class="row">
            <div class="span2" style="text-align:right;padding-top:5px">Tel&eacute;fono</div>
            <div class="span7"><input type="text" name='phone' <?php echo  'value="'.$phone.'"'; ?> placeholder="Phone number"></div>
          </div>
          <div class="row">
            <div class="span2" style="text-align:right;padding-top:5px">EPS</div>
            <div class="span7"><input type="text" name='eps' <?php echo  'value="'.$eps.'"'; ?> Placeholder="Insurance company"></div>
          </div>
          <div class="row">
            <div class="span2" style="text-align:right;padding-top:5px">Pa&iacute;s de residencia</div>
            <div class="span7"><input type="text" name='countryreside' <?php echo  'value="'.$countryreside.'"'  ; ?> placeholder="Country of residence"></div>
          </div>
          <div class="row">
            <div class="span2" style="text-align:right;padding-top:5px">Cuidad de residencia</div>
            <div class="span7"><input type="text" name='cityreside' <?php echo  'value="'.$cityreside.'"'  ; ?> placeholder="City of residence"></div>
          </div>
          <div class="row">
            <div class="offset2 span7"><button type="submit" class="btn">Salvar</button></div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="offset4 span5"><h4>Volver a formularios cl&iacute;nicos</h4></div>
    </div>
    <div class="row">
      <div class="offset4 span4 btn-group btn-group-vertical">
        <a href='myaccount.php?page=basic' class='btn btn-inverse'>DATOS CLINICOS</a>
        <a href='myaccount.php?page=blood' class='btn btn-inverse'>PRUEBAS EN SANGRE</a>
        <a href='myaccount.php?page=diagnostic' class='btn btn-inverse'>IMAGENES CLINICAS</a>
        <a href='myaccount.php?page=cardiovascular' class='btn btn-inverse'>DESEMPENO CARDIOVASCULAR</a>
      </div>

    </div>

  </div>
  <br/><br/>
  <?php
  }

  ?>
  <?php mysqli_close($con); 
  ?>