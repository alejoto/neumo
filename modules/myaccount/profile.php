<!DOCTYPE html>
<html>
  <head>
    <title>HIAPULCO</title>
    <link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../assets/stylesheets/neumo.css" rel="stylesheet" media="screen">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>    
  </head>
<body>

  <? include '../includes/header.php'; ?>
  
  <!--main content here-->
    <div class="container">
      <div class="row">
        
        <div class="span3" style="margin-top: 30px;">
          <? include '../includes/left_menu.php'; ?>
          <script src="../../assets/js/neumo.js"></script>
        </div>

        <div class="span8 offset1" style="margin-top: 50px;">  
          <div class="row">
            <? include '../includes/info.php'; ?>
          </div>
          
          <div class="row"><br>
            <div CLASS="well well-small">
              <h4>INGRESO CLINICO</h4>
            </div>
            
            <? //include '../includes/form_clinico.php'; ?>  
          </div>
        </div>
      
      </div>
    </div>
  <!--end of main content-->



  <div id="footer" style="background:#3A3A3A;color:white; margin-top: 30px;">
  </div>
  
</body>
</html>
