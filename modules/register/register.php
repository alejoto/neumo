<form action="" method="post">
  <div id="modal_register" class="modal hide fade sign_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2 id="myModalLabel"><u>Registrarse</u></h2>
    </div>
  
    <div class="modal-body">
      <blockquote>
        <p>Para registrarse ingrese su correo electr&oacute;nico y una contrase&ntilde;a segura:</p>
      </blockquote>
    
      <div class="input-prepend">        
        <span class="add-on"><i class="icon-envelope "></i></span>
        <input class="input-large" id="mail" name="mail" type="text" placeholder="Email">
        <br><br>
      
        <span class="add-on"><i class="icon-user"></i></span>
        <input class="input-large" id="pwd1" name="pwd1" type="password" placeholder="Contrase&ntilde;a"><br><br>

        <span class="add-on"><i class="icon-check "></i></span>
        <input class="input-large" id="pwd2" name="pwd2" type="password" placeholder="Confirmar contrase&ntilde;a"><br>

      </div><br>
    
      <div class="control-group error" id="msg_register"></div>
    
    </div>

    <div class="modal-footer">
      <a class="btn btn-primary" data-dismiss="modal" aria-hidden="true" >Cerrar</a>
      <a class="btn btn-success" id="register_button" >Registrarse</a>
    </div>
  </div>
</form>

<script src="assets/js/login.js"></script>

