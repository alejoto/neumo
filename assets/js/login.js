$("#button_modal").click(function(){
   $("#msg").html("");
});

$("#login").click(function(){

  $.post("modules/login/ajax_login.php",{ usr:$('#usr').val(), pwd:$('#pwd').val() }, function(data) {
    
    if(data=='yes') {
      document.location='index.php';
    }else{
      $("#msg").html("<label class='control-label' for='inputError'>por favor Verifica tus datos.</label>");
    }
    
  });

});

$("#register_button").click(function(){

  $.post("modules/register/ajax_register.php",{ mail:$('#mail').val(), pwd1:$('#pwd1').val(), pwd2:$('#pwd2').val() }, function(data) {
    
    if(data=='yes') {
      document.location='index.php';
    }else{
      $("#msg_register").html("<label class='control-label' for='inputError'>por favor Verifica tus datos.</label>");
    }
    
  });

});