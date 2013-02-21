function to_database(info,table) {
  $.post("../patient/ajax_save.php",{ info:info, table:table }, function(data) {
		alert(data);
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

$("#save_spir").click(function(){
	var info = get_info("spir1");
	to_database(info,"hap_spirometry");
});

$("#vo2_save").click(function(){
	var info = get_info("cpt");
	to_database(info,"hap_cp_stress_test");
});

$("#sixmin_save").click(function(){
	var info = get_info("sixmw");
	to_database(info,"hap_six_mins_walk");
});
		//// BUTTONS OF IMAGENES DIAGNOSTICAS///

$("#xray_save").click(function(){
	var info = get_info("xray");
	to_database(info,"hap_x_ray");
});

$("#tc_save").click(function(){
	var info = get_info("tcangio");
	to_database(info,"hap_tc_angio");
});

$("#gamma_save").click(function(){
	var info = get_info("gam");
	to_database(info,"hap_gammagr");
});

$("#artergph_save").click(function(){
	var info = get_info("p_art");
	to_database(info,"hap_pulm_arteriography");
});

$("#mri_save").click(function(){
	var info = get_info("mri1");
	to_database(info,"hap_mri");
});

$("#ecoc_save").click(function(){
	var info = get_info("eco");
	to_database(info,"hap_ecocardio");
});

$("#legsdoppler_save").click(function(){
	var info = get_info("du_legs");
	to_database(info,"hap_duplex_legs");
});

$("#react_save").click(function(){
	var info = get_info("react");
	to_database(info,"hap_vasoreact_test");
});

$("#save_rt_cath").click(function(){
	var info = get_info("bas");
	to_database(info,"hap_right_cathet");
});

$("#vreac_test_done").change(function(){
	if (this.value == "si") {
		var info = get_info("bas");
		to_database(info,"hap,right_cathet");
	}
});


