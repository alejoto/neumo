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
  
  <body style="background-image:url('assets/images/debut_light.png');background-repeat:repeat;">
   <div class="container" style="height: auto; background-image:url('assets/images/debut_light.png');background-repeat:repeat-x;">
      <br><br>
      <div class="row-fluid">
        
        <div class="span8" style="margin-top: -18px; text-align: left; padding-left: 50px;">
          <h2 style="color: #5C5C64; font-family: 'Play', cursive;">RECOLHAP <img style="width: 36px; heigth: 29px;" src="assets/images/logo-gray.png"></h2>
        </div>
        
        <div class="span4">
          <a href="mailto:marketing@healmydisease.com" class="left_space"> <b style="font-family: 'Oxygen', sans-serif; margin-left: -15px"> Contactanos </b> </a>
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
    <hr style="margin-top: 0px;">
    <!--// START Imagenes Carousel-->
    <center>
     <div class="row-fluid" style="margin-top: 0px;">
      <div class="span12" style="margin: 0px auto;">
       <div id="banner">
          <?php include 'modules/includes/carousel.html'; ?>
       </div>
      </div>
     </div>
    <!--// END Imagenes Jquery-->

    <hr>
        
    <div class="container" style="height: auto; background-image:url('assets/images/debut_light.png');background-repeat:repeat-x;">
      
      <div class="row-fluid" style="margin-top: 40px; background-image:url('assets/images/debut_light.png');background-repeat:repeat-x; margin-top: 0px;">

        <div class="span4 alert" style="background: #FAFAFA; color: gray; border-color: white;">
                  <img src="assets/images/icon-discover.png">
          <h2 style="color: #4A4C4C;; font-family: 'Oxygen', sans-serif; margin-top: 30px;">Prop&oacute;sito <i style="color: #4A4C4C;" class="icon-time"></i></h2><br>
          <div  style="font-size:14px;font-family: 'Roboto', sans-serif; height: 80px;">Nuevos tratamientos de la <b>Hipertensi&oacute;n Arterial Pulmonar </b> y nuvas herramientas para su analisis</div>
           <br><br>
        </div>
        
        <div class="span4 alert" style="background: #FAFAFA; color: gray; border-color: white; height: 330px;">
          <img src="assets/images/icon-one.png">
          <h2 style="color: #4A4C4C;; font-family: 'Oxygen', sans-serif; margin-top: 30px;">El Registro  <i style="color: #4A4C4C;" class="icon-stethoscope"></i></h2><br>
          <div  style="font-size:1rpx;font-family: 'Roboto', sans-serif;">pretende recopilar la mayor informaci&oacute;n posible 
           sobre la enfermedad para identificar conductas terap&eacute;uticas innovadoras.</div>
           <br><br>
        </div>

        <div class="span4 alert" style="background: #FAFAFA; color: gray; border-color: white; height: 330px;">
          <img src="assets/images/icon-organized.png">
          <h2 style="color: #4A4C4C;; font-family: 'Oxygen', sans-serif; margin-top: 30px;">Participe  <i style="color: #4A4C4C;" class="icon-globe"></i></h2><br>
          <div  style="font-size:14px; font-family: 'Roboto', sans-serif;">Perteneces a una instituci&oacute;n que atiende pacientes con la enfermedad, 
          le invitamos a registrarse.</div>
          <br><br>
        </div>
      </div>
      <hr>
      <div hidden id="footer_index" class="row-fluid" style="margin-top: 0px; padding-left: 25px; background-image:url('assets/images/blackorchid.png')">
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
