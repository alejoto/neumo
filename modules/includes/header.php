<!DOCTYPE html>
<html>
<head>
  <title>RECOLHAP</title>
  <link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../../assets/stylesheets/neumo.css" rel="stylesheet" media="screen">
  <link rel="icon"   type="image/png"  href="../../assets/images/favicon.ico">
  <link rel="stylesheet" href="../../assets/fonts/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

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
    <div class="span2"><p style="color: #C6C6AA; font-family: 'Play', cursive; font-weight: 700; font-size:120%;">RECOLHAP <img style="width: 30px; heigth: 23px;" src="../../assets/images/logo-gray.png"></p></div>
    <div class="span5">
      <div class="btn-group">
        
        
        <?php
          if( isset($_SESSION['evaluation']) ){
            echo '<a class="btn btn-inverse" id="change_patient_btn" href="myaccount.php?page=patients">
                    Cambiar paciente 
                    <i class="icon-user icon-white"></i>
                  </a>';
          }
        ?>
        <a href="../myaccount/myaccount.php?page=statistics" class="btn  btn-inverse ">
          Estad&iacute;sticas 
          <i class="icon-user icon-signal"></i>
        </a>
        <a href="../login/logout.php" class="btn btn-inverse">Salir<i class="icon-share-alt icon-white"></i></a>
      </div>
    </div>
    <div class="span5" style="color:gray">
      <?php 
      include '../DB/connect.php';
      $user_id=$_SESSION['username'];
      $result_user = mysqli_query($con,"SELECT * FROM main_investigator WHERE user_id='$user_id'"  );  
      $row_user    = mysqli_fetch_array($result_user);
      ?>
      <a href="myaccount.php?page=user_register" style="color:gray"  data-toggle="tooltip" title="Editar perfil" data-placement="bottom" >
        <?php echo $row_user['ivt_name'].' '.$row_user['ivt_surname']; ?>
      </a>

    </div>
  </div>
</div>
<!--menu ending-->
