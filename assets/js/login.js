$("#button_modal").click(function(){
   $("#msg").html("");
});

function hap_login_method (){
  $("#msg").text("");
  if ($('#usr').val()==""&&$('#pwd').val()=="") {
    $("#msg").html("<label class='control-label' for='inputError'>No puede dejar campos vac&iacute;os.</label>");
    $('#usr').focus();
  }
  else if ($('#usr').val()=="") {
    $("#msg").html("<label class='control-label' for='inputError'>ingrese su email.</label>");
    $('#usr').focus();
  }
  else if ($('#pwd').val()=="") {
    $("#msg").html("<label class='control-label' for='inputError'>Debe ingresar su contrase&ntilde;a.</label>");
    $('#pwd').focus();
  }
  else {
    //
    $("#loading").show();
    $.post("modules/login/ajax_login.php",{ usr:$('#usr').val(), pwd:$('#pwd').val() }, function(data) {
    if(data=='yes') {
      document.location='modules/myaccount/myaccount.php?page=patients';
    }else{
      $("#msg").html("<label class='control-label' for='inputError'>Verifique usuario y contrase&ntilde;a. <br/>Si nunca se ha registrado ingrese al link respectivo.</label>");
    }
    $("#loading").hide();
    });
  }
};


$("#login").click(function(){hap_login_method();});
$("#pwd").keyup(function(event){if(event.keyCode == 13){hap_login_method();} });





$("#register_button").click(function(){

  $.post("modules/register/ajax_register.php",{ mail:$('#mail').val(), pwd1:$('#pwd1').val(), pwd2:$('#pwd2').val() }, function(data) {
    
    if(data=='yes') {
      document.location='index.php';
    }else{
      $("#msg_register").html("<label class='control-label' for='inputError'>por favor Verifica tus datos.</label>");
    }
    
  });

});