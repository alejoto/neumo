<form action="modules/login_response.php" method="post">
  <div id="myModal" class="modal hide fade sign_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2 id="myModalLabel"><u>Acceder</u></h2>
      <img src="assets/images/facebook_icon_solo.png">
      <img src="assets/images/twitter_icon_solo.png">
    </div>
  
    <div class="modal-body">
      <blockquote>
        <p>Tambien atraves de tu correo electronico:</p>
        <small>Las aventuras de <cite title="Source Title">coder boy</cite></small>
      </blockquote>
    
      <div class="input-prepend">
        <span class="add-on">@</span>
        <input class="input-large" id="prependedInput" name="user" type="text" placeholder="Username">
        <br><br>
      
        <span class="add-on">@</span>
        <input class="input-large" id="prependedInput" name="pwd" type="text" placeholder="Password">
      </div><br>
    
    </div>

    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button class="btn btn-primary" type="submit" >Entrar</button>
    </div>
  </div>
</form>