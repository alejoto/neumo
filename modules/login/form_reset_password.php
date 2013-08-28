<form action="../login/updating_pwds.php" method="post">
  <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
  Contrase&ntilde;a: <input type="password" name="pwd"><br>
  Confirme su contrase&ntilde;a: <input type="password" name="pwd_conf"><br>
  <input type="submit" value="Confirmar">
</form>
