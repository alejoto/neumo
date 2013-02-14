
/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#day_ev"),$("#nyha_funct_class")], $("#sympt_save"));
hide_show_savebutton([$("#pulse"),$("#breathing"),$("#psist"),$("#pdiast")], $("#ef_save"));
hide_show_savebutton([$("#day_death"),$("#dead_cause")], $("#dead_save"));

/*Hide selected fields when loading page*/
$(document).ready(function() {
  $("#inputdrug").hide();
  $("#drug_adv_event").hide();
  $("#year_transp").hide();
});

/*Toggle asociado a texto "Añadir (Fármaco)"*/
$("#ad_drug").click(function(){
  $("#inputdrug").toggle("fast");
  if ($("#ad_drug").html()=="Ocultar") {$("#ad_drug").html("Añadir");}
  else {$("#ad_drug").html("Ocultar");}
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
    ,'Pruebas<br>de sangre','Desempe&ntilde;o cardiovascular','Im&aacute;genes diagn&oacute;sticas','Evaluaci&oacute;n <br>cl&iacute;nica');



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

    hide_if_empty($("#homeoxigen"), $("#ox_depend"));

    show_on_check($("#tendt"), $("#tendt_hide"));
    show_on_check($("#atr_sept"), $("#atr_sept_hide"));

    tiprequired ($("#day_ev"));

    trigger_bsa($("#weight"), $("#height"), $("#bsa"));
    p_a_m($("#psist"), $("#pdiast"), $("#ef_pam"));
