<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>HIAPULCO</title>
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/stylesheets/neumo.css" rel="stylesheet" media="screen">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
  </head>
  
  <body>

    <div class="container">
      
      <hr></hr>
      <div class="row-fluid">
        <div class="span6" style="">Page Name Logo</div>
        <div class="span6" style="">
          
          <a href="#" class="left_space"> Blog </a>
          <a href="#" class="left_space"> Twitter </a>
          <a href="#" class="left_space"> Contactanos </a>
          &nbsp; | &nbsp;
          
          <?php
            if(isset($_SESSION['username'])){ 
              echo '<a href="modules/myaccount/myaccount.php?page=patients"><u>'
                    .$_SESSION['username'].
                    '</u></a>';

              echo '<a href="modules/login/logout.php" role="button" class="btn btn-primary left_space">Logout</a>';
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
        <div class="span8">
          <h4 class="info_index_title">Lorem ipsum</h4>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
          laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
          ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        </div>
      
        <div class="span4 info_index">
          <h4 class="info_index_title2">Duis autem</h4>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
          <br><br>
        </div>
      </div>
      
      <hr></hr>
      
      <div id="footer">
      </div>
      
    </div>
      
  </body>
</html>
