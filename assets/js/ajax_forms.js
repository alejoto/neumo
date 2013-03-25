function to_database(info,table) {
  $.post("../patient/ajax_save.php",{ info:info, table:table }, function(data) {
	//alert(data);
	if(data=='Yes') {
		alert("Datos guardados exitosamente");
	}else{
		alert("Ocurrio un problema al guardar los datos");
	}
  });  
}

/** 
 * Name			:	reset_fields()
 * Description	:	Function to reset the values when the persistance to the 
 * 					data base is finish in a form
 **/
function reset_fields(info_id2){
	// Can be done with Jquery??
	arr2 = $("." + info_id2);
	for (var item = 0; item < arr2.length; item++) {
		 if(arr2[item].type == "checkbox" ){ 
			 arr2[item].checked = false;
		 }else{		 
			 arr2[item].value = "";
		 }
	}
	
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

function check_date(column_name,table_name,date){
	$.post("../patient/ajax_check.php",{ column_name:column_name,
					table_name:table_name, date:date }, function(data) {
		//alert(data);
		if(data=='occuped') {
			alert("Ya se le realizo un examen a ese paciente en esta fecha");
		}
	  });  
	}


$(".date3").change(function(){
	/* Create a variable with the date with jQuery */
	var date = $(".date3").prev().prev().val() + "-"+ $(".date3").prev().val() 
				+ "-" + $(".date3").val();
	/* Find the colum name for the date */
	var column_name = $(".date3").parent().attr("name");
	
	/* Find the table where this date must be persisted */
	var table_name = "hap_"+$(".date3").parent().parent().attr("name");
	
	check_date(column_name, table_name, date);	
});

		////BUTTONS OF EVALUACION CLINICA////
//TODO Complete!!!

$("#hiperclot_save").click(function(){
  var info = get_info("hiperclot");
  to_database(info,"table_name");
  
  reset_fields("hiperclot");
  $("#hiperclot_save").hide();
});

$("#treatment_save").click(function(){
  var info = get_info("treatment");
  to_database(info,"table_name");
  reset_fields("treatment");
  $("#treatment_save").hide();
});

$("#outcome_save").click(function(){
  var info = get_info("outcome");
  to_database(info,"table_name");
  reset_fields("outcome");
  $("#outcome_save").hide();
});

		////BUTTONS OF DESEMPENO CARDIOVASCULAR////

$("#save_ecg").click(function(){
	var info = get_info("ecg");
  to_database(info,"hap_electrok");
  reset_fields("ecg");
  $("#save_ecg").hide();
});

$("#save_spir").click(function(){
	var info = get_info("spir1");
	to_database(info,"hap_spirometry");
	reset_fields("spir1");
	$("#save_spir").hide();
});

$("#vo2_save").click(function(){
	var info = get_info("cpt");
	to_database(info,"hap_cp_stress_test");
	reset_fields("cpt");
	$("#vo2_save").hide();
});

$("#sixmin_save").click(function(){
	var info = get_info("sixmw");
	to_database(info,"hap_six_mins_walk");
	reset_fields("sixmw");
	$("#sixmin_save").hide();
	
});
		//// BUTTONS OF IMAGENES DIAGNOSTICAS///

$("#xray_save").click(function(){
	var info = get_info("xray");
	to_database(info,"hap_x_ray");
	reset_fields("xray");
	$("#xray_save").hide();
});

$("#tc_save").click(function(){
	var info = get_info("tcangio");
	to_database(info,"hap_tc_angio");
	reset_fields("tcangio");
	$("#tc_save").hide();
});

$("#gamma_save").click(function(){
	var info = get_info("gam");
	to_database(info,"hap_gammagr");
	reset_fields("gam");
	$("#gamma_save").hide();
});

$("#artergph_save").click(function(){
	var info = get_info("p_art");
	to_database(info,"hap_pulm_arteriography");
	reset_fields("p_art");
	$("#artergph_save").hide();
});

$("#mri_save").click(function(){
	var info = get_info("mri1");
	to_database(info,"hap_mri");
	reset_fields("mri1");
	$("#mri_save").hide();
});

$("#ecoc_save").click(function(){
	var info = get_info("eco");
	to_database(info,"hap_ecocardio");
	reset_fields("eco");
	$("#ecoc_save").hide();
});

$("#legsdoppler_save").click(function(){
	var info = get_info("du_legs");
	to_database(info,"hap_duplex_legs");
	reset_fields("du_legs");
	$("#legsdoppler_save").hide();
});

$("#save_rt_cath").click(function(){
	var info = get_info("bas");
	to_database(info,"hap_right_cathet");
	$('#success_on_save').show('fast');
	$('#basal').hide('fast');
	reset_fields("bas");
	$("#save_rt_cath").hide();
	//window.location.href = "myaccount.php?page=diagnostic";
});

$("#vreac_test_done").change(function(){
	if (this.value == "si") {
		var info = get_info("bas");
		to_database(info,"hap_right_cathet");
		reset_fields("bas");
		$("#vreac_test_done").hide();
	}
});

$("#react_save").click(function(){
	var info = get_info("react");
	to_database(info,"hap_vasoreact_test");
	$('#success_on_save').show('fast');
	$('#reactiv').hide('fast');
	reset_fields("react");
	$("#react_save").hide();
	//window.location.href = "myaccount.php?page=diagnostic";
});

		////BUTTONS OF 'PRUEBAS DE SANGRE'////

$("#hb_save").click(function(){ 
	var info = get_info("hemo");
	to_database(info,"hap_hb");
	reset_fields("hemo");
	$("#hb_save").hide();
});

//TODO The rest of the Blood!!!
$("#hiv_save").click(function(){ 
	var info = get_info("vih");
	to_database(info,"hap_vih");
	reset_fields("vih");
	$("#hiv_save").hide();
});

$("#bld_gass_save").click(function(){
	var info = get_info("art_gas");
	to_database(info,"hap_arterialgasses");
	reset_fields("art_gas");
	$("#bld_gass_save").hide();
});

$("#renal_save").click(function(){
	var info = get_info("ren");
	to_database(info,"hap_renal");
	reset_fields("ren");
	$("#renal_save").hide();
});

$("#liver_save").click(function(){
	var info = get_info("live");
	to_database(info,"hap_hepatic");
	reset_fields("live");
	$("#liver_save").hide();
});

$("#bleed_save").click(function(){
	var info = get_info("coag");
	to_database(info,"hap_coag");
	reset_fields("coag");
	$("#bleed_save").hide();
});

