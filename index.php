<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>RECOLHAP</title>
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/stylesheets/neumo.css" rel="stylesheet" media="screen">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
  </head>
  <body>
    <div class="container">
      <hr></hr>
      <div class="row-fluid">
        <div class="span6" style="">Registro Colombiano de Hipertensión Arterial Pulmonar</div>
        <div class="span6" style="">
          <a href="mailto:marketing@healmydisease.com" class="left_space"> Contactanos </a>
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
    
    <div id="banner">
      <? include 'modules/includes/carousel.html'; ?>
    </div>    
        
    <div class="container">
      
      <div class="row-fluid">  
        <div class="span8 info_index_0">
          <h4 class="info_index_title">RECOLHAP</h4>
          El <b>REGISTRO MULTICÉNTRICO COLOMBIANO DE HIPERTENSIÓN ARTERIAL PULMONAR - RECOLHAP</b> es 
          una iniciativa de la Asociación Colombiana de Neumología y Cirugía del Tórax
          que a la luz de las mas recientes alternativas terapéuticas pretende 
          recopilar la mayor información posible para identificar conductas terapéuticas innovadoras
          - preventivas, curativas y rehabilitadoras -  con miras a mejorar la calidad de vida
          y supervivencia de aquellas personas con esta enfermedad.
          <br><br> 
          
        </div>
      
        <div class="span4 info_index">
          <h4 class="info_index_title2">PARTICIPA EN EL REGISTRO!</h4>
          Si usted pertenece a una institución que atiende pacientes con Hipertensión Arterial Pulmonar, 
          te invitamos a que hagas parte de este registro, inscribiéndote - es muy fácil - y añadiendo
          los datos solicitados para el registro.
          
          <br><br>
        </div>
      </div>
      
      <hr></hr>
      
      <div id="footer">
          RECOLHAP - Registro Multicéntrico Colombiano de Hipertensión Arterial Pulmonar - 2012. Derechos reservados.
      </div>
      
    </div>
      
  </body>
</html>
