
/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#day_ev"),$("#nyha_funct_class")], $("#sympt_save"));
hide_show_savebutton([$("#pulse"),$("#breathing"),$("#psist"),$("#pdiast")], $("#ef_save"));
hide_show_savebutton([$("#day_death"),$("#dead_cause")], $("#outcome_save"));

/*Hide selected fields when loading page*/
$(document).ready(function() {
  $("#inputdrug").hide();
  $("#drug_adv_event").hide();
  $("#year_transp").hide();
});

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
	if (this.checked){
		$("#tendt_hide").show('fast');
	}
	else{
		$("#tendt_hide").hide('fast');
	}
});

$("#atr_sept").change(function(){
	if (this.checked){
		$("#atr_sept_hide").show('fast');
	}
	else{
		$("#atr_sept_hide").hide('fast');
	}
});
	
/**
 * END OF lines hide
 */


// Saving 'anamnesis' and 'ex fco' in DB table
hide_show_savebutton([$('#day_ev'),$('#nyha_funct_class')],$('#sympt_save2'));

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

  var nyha_funct=$('#nyha_funct').val();

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

if (anam_day==''||nyha_funct=='') {
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
    ,nyha_funct:nyha_funct
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
    $('#nyha_funct').val('');
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


/*Toggle asociado a Evento adverso (opción dentro de "Motivo de suspensión")*/
$("#suspend_cause").change(function(){
  if ($("#suspend_cause").val()=="Evento adverso")
  {$("#drug_adv_event").show("fast");}
  else {$("#drug_adv_event").hide("fast");}
});

/*Toggle asociado a opciones de respuesta transplante(select list)*/
$("#transplant").change(function(){
  if ($("#transplant").val()=="pulmon"||$("#transplant").val()=="corazon pulmon") {
    $("#year_transp").show("fast");
  } else {
    $("#year_transp").hide("fast");
  }
});

/*anam,ex_fc,hiperclot,outcome */
$(document).ready(function() {
  $("#ex_fc").hide();
  $("#hiperclot").hide();
  $("#treatment").hide();
  $("#outcome").hide();
});

/*Función para mostrar segmento seleccionado*/
function showmain(btnsw,hid1,hid2,hid3,hid4,shwmain){
  btnsw.click(function(){
    hid1.hide("fast");
    hid2.hide("fast");
    hid3.hide("fast");
    hid4.hide("fast");
    shwmain.show("fast");
    });}

    /*Funciones invocadas desde archivo clinic.js*/


    icon_exchanger($(".main_icon"),$("#blood_test"),$("#performance"),$("#clin_images"),$("#basic_eval")
    ,'-92px 75px','-184px 75px','-276px 75px','0  0px'
    ,'Pruebas<br>en sangre','Desempe&ntilde;o cardiovascular','Im&aacute;genes diagn&oacute;sticas','Evaluaci&oacute;n <br>cl&iacute;nica');



    showmain($("#sel_outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#outcome"));
    showmain($("#sel_anam"),$("#outcome"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#anam"));
    showmain($("#sel_ex_fc"),$("#outcome"),$("#anam"),$("#hiperclot"),$("#treatment"),$("#ex_fc"));
    showmain($("#sel_hiperclot"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#treatment"),$("#hiperclot"));
    showmain($("#sel_treatment"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"));

    show_ifnoempty($("#year"),$("#month"));
    show_ifnoempty($("#month"),$("#day"));
    show_ifnoempty($("#year_ev"),$("#month_ev"));
    show_ifnoempty($("#month_ev"),$("#day_ev"));
    show_ifnoempty($("#year_ini_d"),$("#month_ini_d"));
    show_ifnoempty($("#month_ini_d"),$("#day_ini_d"));
    show_ifnoempty($("#year_end_d"),$("#month_end_d"));
    show_ifnoempty($("#month_end_d"),$("#day_end_d"));
    show_ifnoempty($("#year_transp"),$("#month_transp"));
    show_ifnoempty($("#month_transp"),$("#day_transp"));
    show_ifnoempty($("#year_tendt"),$("#month_tendt"));
    show_ifnoempty($("#month_tendt"),$("#day_tendt"));
    show_ifnoempty($("#year_atr"),$("#month_atr"));
    show_ifnoempty($("#month_atr"),$("#day_atr"));
    show_ifnoempty($("#year_death"),$("#month_death"));
    show_ifnoempty($("#month_death"),$("#day_death"));

    num_ranges($("#year"), 2020, 1990,0);
    num_ranges($("#month"), 12, 1,0);
    num_ranges($("#year_ev"), 2020, 1990,0);
    num_ranges($("#month_ev"), 12, 1,0);
    num_ranges($("#day_ev"), 31, 1,0);
    num_ranges($("#year_ini_d"), 2020, 1990,0);
    num_ranges($("#month_ini_d"), 12, 1,0);
    num_ranges($("#day_ini_d"), 31, 1,0);
    num_ranges($("#year_end_d"), 2020, 1990,0);
    num_ranges($("#month_end_d"), 12, 1,0);
    num_ranges($("#day_end_d"), 31, 1,0);
    num_ranges($("#year_transp"), 2020, 1990,0);
    num_ranges($("#month_transp"), 12, 1,0);
    num_ranges($("#day_transp"), 31, 1,0);
    num_ranges($("#year_tendt"), 2020, 1990,0);
    num_ranges($("#month_tendt"), 12, 1,0);
    num_ranges($("#day_tendt"), 31, 1,0);
    num_ranges($("#year_atr"), 2020, 1990,0);
    num_ranges($("#month_atr"), 12, 1,0);
    num_ranges($("#day_atr"), 31, 1,0);
    num_ranges($("#year_death"), 2020, 1990,0);
    num_ranges($("#month_death"), 12, 1,0);
    num_ranges($("#day_death"), 31, 1,0);
    num_ranges($("#weight"), 200, 1,0);
    num_ranges($("#height"), 3, 0,1);
    num_ranges($("#pulse"), 300, 0,0);
    num_ranges($("#breathing"), 50, 0,0);
    num_ranges($("#sat_ox"), 100, 0,0);

    /*
    hide_if_empty($("#homeoxigen"), $("#ox_depend"));
    $("#homeoxigen").change(function(){
      if ($("#homeoxigen").val()==''||$("#homeoxigen").val()=='no') {
        $("#ox_depend").hide();

      } else{$("#ox_depend").show('fast');};

    });/**/

    //show_on_check($("#tendt"), $("#tendt_hide"));
    //show_on_check($("#atr_sept"), $("#atr_sept_hide"));

    tiprequired ($("#day_ev"));

    trigger_bsa($("#weight"), $("#height"), $("#bsa"));
    p_a_m($("#psist"), $("#pdiast"), $("#ef_pam"));
