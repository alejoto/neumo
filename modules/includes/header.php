<!DOCTYPE html>
<html>
<head>
  <title>RECOLHAP</title>
  <link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../../assets/stylesheets/neumo.css" rel="stylesheet" media="screen">

  <script src="../../assets/js/jquery.min.js"></script>

  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootstrap-carousel.js"></script>
  <script src="../../assets/js/bootstrap-modal.js"></script>
  <script src="../../assets/js/medic.js"></script>
  <script src="../../assets/js/highcharts.js"></script>

</head>
<body>

<!--menu starts here-->
<div style="background:#3A3A3A;color:#fff;padding:10px">
  <div class="row-fluid">
    <div class="span2" style="color:gray"><b>RECOLHAP</b></div>
    <div class="span5">
      <div class="btn-group">
        <a href="../../" class="btn btn-inverse">Inicio<img id="header_lung" src="http://www.healmydisease.com/13hiapulco/images/whitelogo%20trpHIAP.gif" /></a>
        <a class="btn btn-inverse ">Mi perfil <i class="icon-edit icon-white"></i></a>
        <?
          if( isset($_SESSION['patient']) ){
            echo '<a class="btn  btn-inverse " id="edit_patient">Editar paciente <i class="icon-user icon-white"></i></a>'; 
          }
        ?>
        <?
          if( isset($_SESSION['evaluation']) ){
            ?>
            <a class="btn btn-inverse " href="change_patient.php">
              Cambiar paciente &nbsp;&nbsp;
              <i class="icon-share-alt icon-white"></i><i class="icon-user icon-white"></i>
            </a>
            <?php
          }
        ?>
        <a href="../myaccount/myaccount.php?page=statistics" class="btn  btn-inverse ">Estadisticas</a>
        <a href="../login/logout.php" class="btn btn-inverse">Salir<i class="icon-share-alt icon-white"></i></a>
      </div>
    </div>
    <div class="span5" style="color:gray">Dr. HECTOR ORTEGA</div>
  </div>
</div>
<!--menu ending-->
