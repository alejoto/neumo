<form action="" method="post">
  <div id="modal_login" class="modal hide fade sign_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2 id="myModalLabel"><u>Acceder</u></h2>
    </div>
  
    <div class="modal-body">
      <blockquote>
        <p>Ingrese su email y password:</p>
      </blockquote>
    
      <div class="input-prepend">
        <span class="add-on">@</span>
        <input class="input-large" id="usr" name="usr" type="text" placeholder="Username">
        <br><br>
      
        <span class="add-on"><i class="icon-user"></i></span>
        <input class="input-large" id="pwd" name="pwd" type="password" placeholder="Password"><br>

      </div><br>
    
      <div class="control-group error" id="msg"></div>
      <div  id="loading" style="display:none">
        <img src="assets/images/ajax-loader.gif"/>
      </div>
    
    </div>

    <div class="modal-footer">
      <a class="btn btn-primary" data-dismiss="modal" aria-hidden="true" >Cerrar</a>
      <a class="btn btn-success" id="login" >Entrar</a>
    </div>
  </div>
</form>

<script src="assets/js/login.js"></script>

