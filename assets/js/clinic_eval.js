
/**
-------------------------------------------------------------------------------------
*
*
* name         :  No name (execution of previous js function)
* Description  :  Execution of hide_show_savebutton(),
*                 which hides save button until all required
*                 fields are displayed
* Depend on   :   medic.js
* Dependant   :   this file
*/
/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#year_ev"),$("#month_ev"),$("#day_ev"),$("#nyha_funct_class")], $("#sympt_save"));
hide_show_savebutton([$("#pulse"),$("#breathing"),$("#psist"),$("#pdiast")], $("#ef_save"));
hide_show_savebutton([$("#year_death"),$("#month_death"),$("#day_death"),$("#dead_cause")], $("#outcome_save"));


$("#treatment_save").hide('fast');

$("#transplant").change(function(){
	if ($("#transplant").val()==""){
		$("#treatment_save").hide('fast');
	}else if ($("#transplant").val()=="en espera"){
		$("#treatment_save").show('fast');
	}
	if ($("#transplant").val()=="pulmon"||$("#transplant").val()=="corazon pulmon") {
	    $("#year_transp").show("fast");
	    if($("#year_transp").val() == ""){
	    	hide_show_savebutton([$("#year_transp"),$("#month_transp"),$("#day_transp")], $("#treatment_save"));
	    }
	 } else {
	    $("#year_transp").hide("fast");
	    $("#year_transp").val("");
	    $("#month_transp").hide("fast");
	    $("#month_transp").val("");
	    $("#day_transp").hide("fast");
	    $("#day_transp").val("");
	  }
});
	

/*Toggle asociado a opciones de respuesta transplante(select list)
$("#transplant").change(function(){
  
});
*/

/*Hide selected fields when loading page*/
$(document).ready(function() {
  $("#inputdrug").hide();
  $("#drug_adv_event").hide();
  $("#year_transp").hide();
  $(".susp_date").next().hide();
  $(".susp_save").hide();
  $(".alert").hide(); 
});

/* Change the button of the suspension date */
$(".susp_cause").click(function(){
	if($(this).html() == "No ha habido suspensi�n"){
		$(this).parent().parent().prev().html("Agregar");
		$(this).parent().parent().parent().parent().prev().children().hide('fast');
		$(this).parent().parent().parent().parent().next().children().hide('fast');
		$(".susp_cause").parent().parent().parent().show('fast');
		date_pharmac($(this).parent().parent().parent().parent().prev().children().children());
		$("#susp_save").hide('fast');
	}else{
		$(".susp_cause").parent().parent().parent().hide('fast');
		$(this).parent().parent().parent().show('fast');
		$(this).parent().parent().prev().html($(this).html());
		$(this).parent().parent().parent().parent().prev().children().show('fast');	
	}
});

$(".day_end_d").change(function(){
	if($(this).val() != "" && $(this).prev().val() != "" && $(this).prev().val() != ""){
		$("#susp_save").show('fast');
	}else{
		$("#susp_save").hide('fast');
	}
});

$("#susp_save").click(function(){
	arr = $(".supension");
	var dates = "";
	  var dates2 = "";
	  var result = "";
	for(var i=0;i<arr.length;i++){
		
	  if( arr[i].value != "" && arr[i].value != undefined ){	  

		// This two if's can be put outside, in a function
				if($(arr[i]).is(".date1")){
					if (dates != "") dates += ",";
					if (dates2 != "") dates2 += ","; 
					dates += $(arr[i]).prev();
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
	
	var table = document.getElementById('treatment_tb'), 
    rows = table.rows,
    i, j, cells, customerId;
	//alert (rows.length);
	 // alert (rows.length);

for (i = 0, j = rows.length; i < j; ++i) {
    cells = rows[i].getElementsByTagName('td');
    //cells[i];
    if(i=5){
    	//alert(cells[2].getAttribute(value));    	
    }
    //alert(cells.length);
   // for (h = 0, p = cells.length, h < p){
   // if (cells[3] != undefined) {
    //	alert(cells.item(3));
    	//alert(j);
    	//continue;
    //}
    //customerId = cells[0].innerHTML;
}
	
	  result = dates+"?"+dates2;
	  //alert (result);

	//alert($("#treatment_tb").html());
	//alert($(".month_end_d").val());
	//alert($(".day_end_d").val());
});


/* Erase the values of the dates and hide the inputs */
function date_pharmac(input){
	input.val("");
	input.next().hide();
	input.next().next().hide();
}

/**
 * Show the save button if th values of the date are correct
 */
$(".susp_date").find("#day_end_d").change(function(){
	if($(this).val() != "" || $(this).val() != null){
		$(this).parent().parent().next().next().children().show('fast');
	}
	else if($(this).val() == "" || $(this).val() == null){
		$(this).parent().parent().next().next().children().hide('fast');
	}
	
});

/**
 * When the click is done to save a suspention date of a pharmac
 */
$(".susp_save").click(function(){
	alert("TODO SAVE"); 
});

/*
$(".susp_cause").click(function(){
	//alert("cosa");

	$(this).html("");
	alert($(this).next().show('fast'));
	//$(this).next().html().style('display:none');
	//$(this).next().parent().parent().html("oli");
	//alert(this.id);
});/*


/*Toggle asociado a texto "Añadir (Fármaco)"*/
$("#ad_drug").click(function(){
  $("#inputdrug").toggle("fast");
  if ($("#ad_drug").html()=="Ocultar") {$("#ad_drug").html("A&ntilde;adir");}
  else {$("#ad_drug").html("Ocultar");}
});
$('#hide_drug_hap').click(function(){
  $('#inputdrug').hide();
  $("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");
  $('#drug').val('');
  $('#year_ini_d').val('');
  $('#month_ini_d').val('');
  $('#day_ini_d').val('');
  //           
});

/**
 * lines to hide the input of the date if the checkboxes arent checked
 */
$(document).ready(function() {$("#tendt_hide").hide();})
$(document).ready(function() {$("#atr_sept_hide").hide();})
$("#tendt").change(function(){
	if (this.checked ){
		$("#tendt_hide").show('fast');
		hide_show_savebutton([$("#year_tendt"),$("#month_tendt"),$("#day_tendt")], $("#treatment_save"));
	}
	else{
		$('#year_tendt').val('');
		$('#day_tendt').val('');
		$('#month_tendt').val('');
		$('#month_tendt').hide('fast');
		$('#day_tendt').hide('fast');
		$("#tendt_hide").hide('fast');
		if($("#day_transp").val() != "" || $("#transplant").val()=="en espera"){
			$("#treatment_save").show('fast');
		}else{
			$("#treatment_save").hide('fast');
		}
	}
});

$("#atr_sept").change(function(){
	if (this.checked){
		$("#atr_sept_hide").show('fast');
		hide_show_savebutton([$("#year_atr"),$("#month_atr"),$("#day_atr")], $("#treatment_save"));
	}
	else{
		$('#year_atr').val('');
		$('#day_atr').val('');
		$('#month_atr').val('');
		$('#month_atr').hide('');
		$('#day_atr').hide('');
		$("#atr_sept_hide").hide('fast');
		if($("#day_transp").val() != "" || $("#transplant").val()=="en espera"){
			$("#treatment_save").show('fast');
		}else{
			$("#treatment_save").hide('fast');
		}
	}
});
	
/**
 * END OF lines hide
 */


// Saving 'anamnesis' and 'ex fco' in DB table
hide_show_savebutton([$('#year_ev'),$('#month_ev'),$('#day_ev'),$('#nyha_funct_class')],$('#sympt_save2'));

$('#sympt_save2').click(function(){
  $('#anam').hide('fast');
  $('#ex_fc').show('fast');
});

$('#ef_save').click(function(){
  //pending to errase sympt_save (without number) from ajax_save

  //disease beggining data
  if ($('#afroamerican').val()) {var afroamerican=$('#afroamerican').val();} else{var afroamerican='';}
  if ($('#month').val()) {
    var begin_month=$('#month').val();
    if (begin_month.length==1) { var begin_month ='0'+ begin_month; }
    var dxdate=$('#year').val() +'-'+ begin_month +'-01';
  } else{var dxdate=''};

  //fixing evaluation date
  var anam_year=$('#year_ev').val();
  var anam_month=$('#month_ev').val();
  var anam_day=$('#day_ev').val();

  if (anam_month.length==1) {anam_month='0'+anam_month;}
  if (anam_day.length==1) {anam_day='0'+anam_day;}

  var eval_date=anam_year+'-'+anam_month+'-'+anam_day;

  var nyha_funct_class=$('#nyha_funct_class').val();

  //checkbox values
  if($("#dyspnea").is(':checked')) { var dyspnea="si";} else {var dyspnea="no";}
  if($("#cough").is(':checked')) { var cough="si";} else {var cough="no";}
  if($("#chestpain").is(':checked')) { var chestpain="si";} else {var chestpain="no";}
  if($("#loweredema").is(':checked')) { var loweredema="si";} else {var loweredema="no";}
  if($("#hemoptysis").is(':checked')) { var hemoptysis="si";} else {var hemoptysis="no";}
  if($("#syncope").is(':checked')) { var syncope="si";} else {var syncope="no";}


  var improved_symts=$('#improved_symts').val();
  var pulse=$('#pulse').val();
  var breathing=$('#breathing').val();
  var sat_ox=$('#sat_ox').val();
  var pres_art_exfco=$('#psist').val()+ '/' +$('#pdiast').val();
  var weight=$('#weight').val();
  var height=$('#height').val();


  if($("#ing_yu").is(':checked')) { var ing_yu="si";} else {var ing_yu="no";}
  if($("#hepatomegaly").is(':checked')) { var hepatomegaly="si";} else {var hepatomegaly="no";}
  if($("#cyanosis").is(':checked')) { var cyanosis="si";} else {var cyanosis="no";}
  if($("#ef_edema").is(':checked')) { var ef_edema="si";} else {var ef_edema="no";}
  if($("#finger_clubbing").is(':checked')) { var finger_clubbing="si";} else {var finger_clubbing="no";}

if (anam_day==''||nyha_funct_class=='') {
  $('#anam').show('fast');
  $('#ex_fc').hide('fast');
  $('#year_ev').focus();

} 

else {
//
  $.post('../patient/save_anam.php',{
    afroamerican:afroamerican
    ,dxdate:dxdate
    ,eval_date:eval_date
    ,nyha_funct_class:nyha_funct_class
    ,dyspnea:dyspnea
    ,cough:cough
    ,chestpain:chestpain
    ,loweredema:loweredema
    ,hemoptysis:hemoptysis
    ,syncope:syncope
    ,improved_symts:improved_symts
    ,pulse:pulse
    ,breathing:breathing
    ,sat_ox:sat_ox
    ,pres_art_exfco:pres_art_exfco
    ,weight:weight
    ,height:height
    ,ing_yu:ing_yu
    ,hepatomegaly:hepatomegaly
    ,cyanosis:cyanosis
    ,ef_edema:ef_edema
    ,finger_clubbing:finger_clubbing
},function(data){
    $('#anam_result').html(data);
    
    if ($('#month').val()!=''&& $('#afroamerican').val()!='') {
      $('#first_eval_form').html('Afroamericano?' 
        + $('#afroamerican').val() 
        + ', inicio sintomas en:' 
        + $('#year').val() + '-' + $('#month').val());
    }
    $('#year_ev').val('');
    $('#month_ev').val('');
    $('#day_ev').val('');
    $('#improved_symts').val('');
    $('#weight').val('');
    $('#height').val('');
    $('#nyha_funct_class').val('');
    $('#sat_ox').val('');
    $('#pulse').val('');
    $('#psist').val('');
    $('#pdiast').val('');
    $('#breathing').val('');

    $('#dyspnea').attr('checked', false);
    $('#cough').attr('checked', false);
    $('#chestpain').attr('checked', false);
    $('#loweredema').attr('checked', false);
    $('#hemoptysis').attr('checked', false);
    $('#syncope').attr('checked', false);
    $('#cyanosis').attr('checked', false);
    $('#hepatomegaly').attr('checked', false);
    $('#ef_edema').attr('checked', false);
    $('#ing_yu').attr('checked', false);
    $('#finger_clubbing').attr('checked', false);

    $('#treatment').show('fast');
    $('#ex_fc').hide('fast');


  });
}

});


//.post ajax for saving new drug in DB

/**
-------------------------------------------------------------------------------------
*
*
* name         :  Enter_drug_toDB(confirm)
* Description  :  saves new entered drug into DB table,
*                 and displays it on HTML table
* Depend on   :   jquery
* Dependant   :   this file
*/
function enter_drug_toDB(confirm){
  if ($('#drug').val()!=''&&$('#year_ini_d').val()!=''&&$('#month_ini_d').val()!=''&&$('#day_ini_d').val()!='') {

    if (confirm!='yes') {var confirm='';}
    var drug=$('#drug').val();
    
    var month_dg=$('#month_ini_d').val();
    if (month_dg.length==1) {month_dg='0'+month_dg;} 
    
    var day_drg=$('#day_ini_d').val();
    if (day_drg.length==1) {day_drg='0'+day_drg;}
    
    var drugdate=$('#year_ini_d').val()+'-'+month_dg+'-'+day_drg;

    $.post(
      '../patient/ajax_new_drug.php'
      ,{drugdate:drugdate,drug:drug,confirm:confirm}
      ,function(data){
        if (data=='exist') {
          $('#drug_already_exist').show('fast');
        }
          else {$('#table_drug_result').html(data);
          $('#treatment_tb > tbody > tr').eq(1).after('<tr class="span8"><td  class="span3">'
            +$('#drug').val()
            +'</td><td class="span2">'
            +drugdate
            +'</td><td class="span2"></td><td class="span2"></td></tr>');
          $('#inputdrug').hide();
          $("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");
          $('#drug').val('');
          $('#year_ini_d').val('');
          $('#month_ini_d').val('');
          $('#day_ini_d').val('');
          $('#drug_already_exist').hide('fast');
        }
      });
  } 
}

$('#btn_add_drug').click(function(){enter_drug_toDB('');});
$("#day_ini_d").keyup(function(event){if(event.keyCode == 13){enter_drug_toDB('');} });

$('#reconfirm_drugsave').click(function(){
  var confirm='yes';
  enter_drug_toDB(confirm);
});

$('#cancel_duplicated_drug').click(function(){
  $('#inputdrug').hide();
  $("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");
  $('#drug').val('');
  $('#year_ini_d').val('');
  $('#month_ini_d').val('');
  $('#day_ini_d').val('');
  $('#drug_already_exist').hide();
});


/*anam,ex_fc,hiperclot,outcome */
$(document).ready(function() {
  $("#ex_fc").hide();
  $("#hiperclot").hide();
  $("#treatment").hide();
  $("#outcome").hide();
  $("#susp_save").hide();
});

/**
-------------------------------------------------------------------------------------
*
*
* name 		: 	showmain(...)
* Description 	: 	When clicking button, displays only one form
*  				while hidding the other ones
* Depend on 	: 	jquery.js
* Dependant 	: 	this file
*/
function showmain(btnsw,hid1,hid2,hid3,hid4,shwmain){
  btnsw.click(function(){
    hid1.hide("fast");
    hid2.hide("fast");
    hid3.hide("fast");
    hid4.hide("fast");
    shwmain.show("fast");
    }
    );
}
showmain($("#sel_outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#outcome"));
showmain($("#sel_anam"),$("#outcome"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#anam"));
showmain($("#sel_ex_fc"),$("#outcome"),$("#anam"),$("#hiperclot"),$("#treatment"),$("#ex_fc"));
showmain($("#sel_hiperclot"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#treatment"),$("#hiperclot"));
showmain($("#sel_treatment"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"));


/*Funciones invocadas desde archivo clinic.js*/

/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of icon_exchanger(...),
*           		which changes big icon according to 
*           		small icons hovering
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
icon_exchanger($(".main_icon"),$("#blood_test"),$("#performance"),$("#clin_images"),$("#basic_eval")
,'-92px 75px','-184px 75px','-276px 75px','0  0px'
,'Pruebas<br>en sangre','Desempe&ntilde;o cardiovascular'
,'Im&aacute;genes diagn&oacute;sticas','Evaluaci&oacute;n <br>cl&iacute;nica');
/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of show_ifnoempty(...),
*           		which displays second field if first is filled with data.
* 				and while first field keeps empty second will be hidden
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
show_ifnoempty($("#year"),$("#month"));

/**
-------------------------------------------------------------------------------------
*
*
* name         :    No name (execution of previous js function)
* Description  :    Execution of hmd_dateformat(...),
*                   which limits months and days inputs
*                   to valid dates.
* Depend on   :     medic.js
* Dependant   :     this file
*/
/*Anammnesis (also applies to "examen fisico") date*/
hmd_dateformat($("#year_ev"),$("#month_ev"),$("#day_ev"));

/*treatment and trasplantation dates*/
hmd_dateformat($("#year_ini_d"),$("#month_ini_d"),$("#day_ini_d"));
hmd_dateformat($("#year_end_d"),$("#month_end_d"),$("#day_end_d"));
hmd_dateformat($("#year_transp"),$("#month_transp"),$("#day_transp"));
hmd_dateformat($("#year_tendt"),$("#month_tendt"),$("#day_tendt"));
hmd_dateformat($("#year_atr"),$("#month_atr"),$("#day_atr"));
hmd_dateformat($("#year_death"),$("#month_death"),$("#day_death"));

/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of num_ranges(...),
*           		which limits value between specified range 
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
var d = new Date(); /* Used to calculate the actual year */
num_ranges($("#year"), d.getFullYear(), 1990,0);
num_ranges($("#month"), 12, 1,0);


/*Ranges for years*/
num_ranges($("#year_ev"), d.getFullYear(), 1990,0);
num_ranges($("#year_ini_d"), d.getFullYear()+5, 1990,0);
num_ranges($("#year_end_d"), d.getFullYear(), 1990,0);
num_ranges($("#year_transp"), d.getFullYear(), 1990,0);
num_ranges($("#year_tendt"), d.getFullYear(), 1990,0);
num_ranges($("#year_atr"), d.getFullYear(), 1990,0);
num_ranges($("#year_death"), d.getFullYear(), 1990,0);

num_ranges($("#weight"), 200, 1,0);
num_ranges($("#height"), 3, 0,1);
num_ranges($("#pulse"), 300, 0,0);
num_ranges($("#breathing"), 50, 0,0);
num_ranges($("#sat_ox"), 100, 0,0);

/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of tiprequired(...),
*           		which displays the tooltip "required field" 
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
tiprequired($("#day_ev"));

/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of trigger_bsa(...),
*           		which calculates body surface area 
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
trigger_bsa($("#weight"), $("#height"), $("#bsa"));
/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of p_a_m(...),
*           		which calculates mean arterial pressure 
* Depend on   :   	medic.js
* Dependant   :   	this file
*/
p_a_m($("#psist"), $("#pdiast"), $("#ef_pam"));
