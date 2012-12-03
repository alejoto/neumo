<!DOCTYPE html>
<html>
  <head>
    <title>Neumomania</title>
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/stylesheets/neumo.css" rel="stylesheet" media="screen">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
  </head>
  
  <body style="text-align: center;">

    <div class="container">
      
      <hr></hr>
      <div class="row-fluid">
        <div class="span6" style="">Page Name Logo</div>
        <div class="span6" style="">
          
          <a href="#" style="margin-left: 15px;"> link1 </a>
          <a href="#" style="margin-left: 15px;"> link2 </a>
          <a href="#" style="margin-left: 15px;"> link3 </a>
          &nbsp; | &nbsp;
          <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">Login</a>
          <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Sign up</a>
          <? include 'modules/login.php'; ?>
        
        </div>
      </div>
    </div>  
    
    <div id="banner">
      <? include 'modules/includes/carousel.html'; ?>
    </div>    
        
    <div class="container">
      
      <div class="row-fluid">  
        <div class="span4">
          <h4>Lorem ipsum</h4>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
          laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
          ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        </div>
      
        <div class="span4">
          <h4>Lorem ipsum</h4>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
          laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
          ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        </div>
      
        <div class="span4">
          <h4>Duis autem</h4>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
          vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim 
          qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
        </div>
      </div>
      
      <hr></hr>
    </div>
      
  </body>
</html>
