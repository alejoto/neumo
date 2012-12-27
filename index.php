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
        
        <div class="span6" style="text-align: left; padding-left: 50px;">
          <img src="https://kippt.com/static/img/kippt-logo-86.png">
        </div>
        
        <div class="span6" style="">
          <a href="mailto:marketing@healmydisease.com" class="left_space"> <b> Contactanos </b> </a>
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
      
      <div class="row-fluid" style="margin-top: 20px;">
          
        <div class="span8 info_index_0 alert alert-info">  

          <div class="page-header" style="padding-left: 20px; color: black; text-align: left;">
            <h2><u>RECOLHAP</u> &nbsp; <small>Subtext for header</small></h2>
          </div>
          
          <p class="alert alert-info" style="margin-top: -30px; font-size: 12px;">
            El <b>REGISTRO MULTIC&Eacute;NTRICO COLOMBIANO DE HIPERTENSI&oacute;N ARTERIAL PULMONAR - RECOLHAP</b> es 
            una iniciativa de la Asociaci&oacute;n Colombiana de Neumolog&iacute;a y Cirug&iacute;a del T&oacute;rax
            que a la luz de las mas recientes alternativas terap&eacute;uticas pretende 
            recopilar la mayor informaci&oacute;n posible para identificar conductas terap&eacute;uticas innovadoras
            - preventivas, curativas y rehabilitadoras -  con miras a mejorar la calidad de vida
            y supervivencia de aquellas personas con esta enfermedad.
          </p>
          
        </div>
      
        &nbsp;
        <div class="span4 info_index alert alert-block">
          
          <div class="page-header" style="text-align: center; margin-top: -10px; color: black;">
            <h3><u>PARTICIPA EN EL REGISTRO</u></h3>
          </div>
          
          <p class="alert" style="margin-top: -30px;">
          Si usted pertenece a una instituci&oacute;n que atiende pacientes con Hipertensi&oacute;n Arterial Pulmonar, 
          te invitamos a que hagas parte de este registro.
          </p><br>
          
        </div>
      </div>
            
      <div id="footer" class="pull-left" style="margin-top: -70px; padding-left: 25px;">
        <br>
        <h5 style="color: green; border-top: solid;">
          RECOLHAP - Copyright 1999-2012 Colombia.
        </h5>
      </div>
      
    </div>
      
  </body>
</html>
