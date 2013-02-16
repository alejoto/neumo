<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>RECOLHAP</title>

    <!--CSS Stylysheets start-->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/stylesheets/neumo.css" rel="stylesheet" media="screen">
    <link rel="icon"   type="image/png"  href="assets/images/favicon.ico">
    <!--CSS Stylysheets ends-->

    <!-- Fonts Start -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
    <!-- Fonts Ends -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  
  <body style="background-image:url('http://localhost/hmd/neumo/assets/images/debut_light.png');background-repeat:repeat;">
   <div class="container" style="height: auto; background-image:url('http://localhost/hmd/neumo/assets/images/debut_light.png');background-repeat:repeat-x;">
      <br><br>
      <div class="row-fluid">
        
        <div class="span8" style="margin-top: -18px; text-align: left; padding-left: 50px;">
          <h2 style="color: #5C5C64; font-family: 'Play', cursive;">RECOLHAP <img style="width: 36px; heigth: 29px;" src="http://localhost/hmd/neumo/assets/images/logo-gray.png"></h2>
        </div>
        
        <div class="span4">
          <a href="mailto:marketing@healmydisease.com" class="left_space"> <b style="font-family: 'Oxygen', sans-serif;"> Contactanos </b> </a>
          &nbsp; | &nbsp;
          
          <?php
            if(isset($_SESSION['username'])){ 
              echo '<a href="modules/myaccount/myaccount.php?page=patients"><u>'
                    .$_SESSION['username'].
                    '</u></a>';
              echo '<a href="modules/login/logout.php" role="button" class="btn btn-primary left_space">Salir</a>';
            }else{
              echo '<a href="#modal_login" id="button_modal" role="button" class="btn btn-success" data-toggle="modal">Entrar</a>';
              echo '<a href="#modal_register" role="button" class="btn btn-primary left_space" data-toggle="modal">Registrate</a>';
            }
    
            include 'modules/login/login.php';
            include 'modules/register/register.php';
          ?>
        
        </div>
      </div>
    </div>  
    <hr>
    <!--// START Imagenes Carousel-->
    <center>
     <div class="row-fluid">
      <div class="span12" style="margin: 0px auto;">
       <div id="banner">
          <?php include 'modules/includes/carousel.html'; ?>
       </div>
      </div>
     </div>
    <!--// END Imagenes Jquery-->

    <hr>
        
    <div class="container" style="height: auto; background-image:url('http://localhost/hmd/neumo/assets/images/debut_light.png');background-repeat:repeat-x;">
      
      <div class="row-fluid" style="margin-top: 40px; background-image:url('http://localhost/hmd/neumo/assets/images/debut_light.png');background-repeat:repeat-x;">
        <div class="span4 alert" style="background: white; color: gray; border-color: white;">
          <h2 style="color: black; font-family: 'Oxygen', sans-serif;">Prop&oacute;sito <i class="icon-time"></i></h2><br>
          <div style="font-size:12px;font-family: 'Roboto', sans-serif; height: 263px;">Nuevos tratamientos de la <b>Hipertensi&oacute;n Arterial Pulmonar </b>
            hacen necesario investigar el impacto en la salud y sobrevida con dichas alternativas.</div>
           <br><br>
        </div>
        
        <div class="span4 alert" style="background: white; color: gray; border-color: white; height: 400px;">
          <h2 style="color: black; font-family: 'Oxygen', sans-serif;">El Registro  <i class="icon-user-md"></i></h2><br>
          <div style="font-size:12px;font-family: 'Roboto', sans-serif;">pretende recopilar la mayor informaci&oacute;n posible 
           sobre la enfermedad para identificar conductas terap&eacute;uticas innovadoras
            que mejoren la calidad de vida de quienes la padecen.</div>
           <br><br>
        </div>

        <div class="span4 alert" style="background: white; color: gray; border-color: white; height: 400px;">
          <h2 style="color: black; font-family: 'Oxygen', sans-serif;">Participe  <i class="icon-globe"></i></h2><br>
          <div style="font-size:12px; font-family: 'Roboto', sans-serif;">Si usted pertenece a una instituci&oacute;n que atiende pacientes con la enfermedad, 
          le invitamos a que hagas parte de este registro.</div>
          <br><br>
        </div>
      </div>
      <hr>
      <div id="footer_index" class="row-fluid" style="margin-top: 0px; padding-left: 25px; background-image:url('http://localhost/hmd/neumo/assets/images/blackorchid.png')">
        <div class="span4" style="color: #F2F2EF;">Columna 1</div>
        <div class="span4" style="color: #F2F2EF;">Columna 2</div>
        <div class="span4" style="color: #F2F2EF;">Columna 3</div>
        <br>
        <br>
        <h5 style="color: #F2F2EF;"><br>
          RECOLHAP - Copyright 2012, Medell&iacute;n - Colombia.
        </h5>
      </div>

    </div>
  </body>
</html>
