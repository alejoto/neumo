<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>RECOLHAP</title>

    <!--CSS Stylysheets start-->
      <?php include 'modules/includes/stylesheets_pipeline.php'; ?>
    <!--CSS Stylysheets ends-->

    <!--JS start-->
      <?php include 'modules/includes/javascripts_pipeline.php'; ?>
    <!--js ends-->
  </head>
  
  <body>
    
   <div class="container index-container">
      <div class="row-fluid">        
        <div class="span8 recolhap-logo-container">
          <h2 class="recolhap">
            RECOLHAP 
            <img class="logo-recolhap" src="assets/images/logo-gray.png">
          </h2>
        </div>
        
        <div class="span4">
          <?php
            include 'modules/includes/logged?.php';
            include 'modules/login/login.php';
            include 'modules/register/register.php';
          ?>
        </div>
      </div>
    </div>
 
    <!-- Carousel images start -->
       <div class="row-fluid">
        <div class="span12 carousel-center">
         <div id="banner">
            <?php include 'modules/includes/carousel.html'; ?>
         </div>
        </div>
       </div>
    <!-- Carousel images end -->

    <div class="container index-info-container">
      <?php include 'modules/includes/index_boxes.html' ?></hr>
      <!--Footer start -->
        <?php include 'modules/includes/index_footer.html' ?>
      <!--Footer end -->
    </div>
    
  </body>
</html>
