function to_database(info,table) {
  $.post("../patient/ajax_save.php",{ info:info, table:table }, function(data) {
		if(data=='Yes') {
      alert("Datos guardados exitosamente");
    }else{
			alert("Ocurrio un problema al guardar los datos");
    }
  });  
}


function get_info(info_id){
  var dates = "";
  var dates2 = "";
  var result = "";
  
  arr = $("." + info_id);
  
 
  for(var i=0;i<arr.length;i++){
    if( arr[i].type == "checkbox" ){ 

      if( dates != "" ) dates += ",";
      if( dates2 != "" ) dates2 += ",";

      dates += arr[i].name;
      dates2 += arr[i].checked;

    }else if( arr[i].name != "" ){
  

	// This two if's can be put outside, in a function
			if($(arr[i]).is(".date1")){
				if (dates != "") dates += ",";
				if (dates2 != "") dates2 += ","; 
				dates += arr[i].name;
				dates2 += arr[i].value+"-"+arr[i+1].value+"-"+arr[i+2].value; 
    		i += 2;
				continue;
			} 
			if($(arr[i]).is(".join2")){
			  if(dates != "") dates += ",";
				if(dates2 != "") dates2 += ",";
				dates += arr[i].name;
				dates2 += arr[i].value+"-"+arr[i+1].value;
				i += 1;
				continue;
			}
      if( dates != "" ) dates += ",";
      if( dates2 != "" ) dates2 += ",";
      
      dates += arr[i].name;
      dates2 += arr[i].value;
    }
  }
  result = dates+"?"+dates2;
  return result;
}


$("#sympt_save").click(function(){
  var info = get_info("anamnesis");
  to_database(info,"table_name");
  //to_update();
});

$("#ef_save").click(function(){
  var info = get_info("ex_fc");
  to_database(info,"table_name");
});

$("#hiperclot_save").click(function(){
  var info = get_info("hiperclot");
  to_database(info,"table_name");
});

$("#treatment_save").click(function(){
  var info = get_info("treatment");
  to_database(info,"table_name");
});

$("#outcome_save").click(function(){
  var info = get_info("outcome");
  to_database(info,"table_name");
});

		////BUTTONS OF DESEMPEÑO CARDIOVASCULAR////

$("#save_ecg").click(function(){
	var info = get_info("ecg");
  to_database(info,"hap_electrok");

});


$("#vo2_save").click(function(){
	var info = get_info("cpt");
	to_database(info,"hap_cp_stress_test");
});

		/// END OF BUTTONS OF DESEMPEÑO CARDIOVASCULAR




