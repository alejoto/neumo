function to_database(info,table) {
  $.post("../patient/ajax_save.php",{ info:info, table:table }, function(data) {
    
    if(data=='yes') {
      alert(info);
      //document.location='modules/myaccount/myaccount.php?page=patients';
    }else{
      alert(data);
      //$("#msg").html("<label class='control-label' for='inputError'>por favor Verifica tus datos.</label>");
    }
    
  });  
}

function get_info(info_id){
  var dates = "";
  arr = $("." + info_id);
  for($i=0;$i<arr.length;$i++){
    if( arr[$i].type == "checkbox" ) dates += arr[$i].id + "=" + arr[$i].checked;
    else if( arr[$i].value != "" ) dates += arr[$i].id + "=" + arr[$i].value;
    if( $i != arr.length-1 && ( arr[$i].type == "checkbox" || arr[$i].value != "" ) ) dates += "?";
  }
  return dates;
}

$("#sympt_save").click(function(){
  var info = get_info("anamnesis");
  to_database(info,"perra");
});