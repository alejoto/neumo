<?php if( isset($_SESSION['username']) ){  ?>

  <a href="modules/myaccount/myaccount.php?page=patients">
    <u> <?php echo $_SESSION['username']; ?> </u>
  </a>
  
  <a href="modules/login/logout.php" role="button" class="btn btn-danger left_space">
    Salir
  </a>
  
<?php }else{ ?>
   
  <a href="#modal_login" id="button_modal" role="button" style="font-family:'Oxygen',sans-serif;" data-toggle="modal">
    <b style="font-family: 'Oxygen', sans-serif;"> Entrar </b>
  </a>
  &nbsp; | &nbsp;
   
  <a href="#modal_register" role="button" class="" data-toggle="modal" style="font-family:'Oxygen',sans-serif;">
    <b style="font-family: 'Oxygen', sans-serif;"> Registrarse </b>
  </a>

<?php }