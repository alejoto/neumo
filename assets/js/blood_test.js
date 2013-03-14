/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#d_hb"), $("#hb_value")], $("#hb_save"));
hide_show_savebutton([$("#d_thyr"), $("#tsh")], $("#thyroid_save"));
hide_show_savebutton([$("#d_dimer"), $("#d_dimer_value")], $("#d_dimer_save"));
hide_show_savebutton([$("#d_trop"), $("#trop_result")], $("#trop_save"));
hide_show_savebutton([$("#d_bpn")], $("#bpn_save"));
hide_show_savebutton([$("#d_vih"), $("#hiv_result")], $("#hiv_save"));
hide_show_savebutton([$("#d_art_gas"), $("#bld_gass_fio2"), $("#bld_gass_ph"), $("#bld_gass_paco2"), $("#bld_gass_pao2"), $("#bld_gass_hco3")], $("#bld_gass_save"));
hide_show_savebutton([$("#d_renal"), $("#creat"), $("#bun")], $("#renal_save"));
hide_show_savebutton([$("#d_liver"), $("#hep_ast"), $("#hep_alt"), $("#hep_fal")], $("#liver_save"));
hide_show_savebutton([$("#d_bleed"), $("#hep_tpt"), $("#hep_tp"), $("#hep_inr")], $("#bleed_save"));
hide_show_savebutton([$("#d_f_reum"), $("#f_reum")], $("#f_reum_save"));
hide_show_savebutton([$("#d_uns_ana"), $("#uns_ana_value")], $("#uns_ana_save"));
hide_show_savebutton([$("#d_sp_ana")], $("#sp_ana_save"));
hide_show_savebutton([$("#d_anti_ENAs")], $("#anti_ENAs_save"));
hide_show_savebutton([$("#d_anti_ph_lip")], $("#anti_ph_lip_save"));
hide_show_savebutton([$("#d_anca_ab")], $("#anca_ab_save"));
hide_show_savebutton([$("#d_citrul_ab"), $("#a_citrul")], $("#citrul_ab_save"));


/*icon exchanger syntax
    main_i[class], icon_1,   icon_2,   icon_3,    icon_main,
(icon positioning) pos_ic_1, pos_ic_2, pos_ic_3,  pos_main,
(icon titles)      title1,   title2,   title3,    maintitle
*/
icon_exchanger($(".main_icon"), $("#basic_eval"), $("#performance"), $("#clin_images"), $("#blood_test"), '0  75px', '-184px 75px', '-276px 75px', '-92px 0px', 'Evaluaci&oacute;n <br>cl&iacute;nica', 'Desempe&ntilde;o cardiovascular', 'Im&aacute;genes diagn&oacute;sticas', 'Pruebas<br>en sangre');

$(document).ready(function () {
  $("#art_gasses").hide();
  $("#renal").hide();
  $("#liver").hide();
  $("#reuma").hide();
});

function showmain2(btnsw, hid0, hid1, hid2, hid3, hid4, shwmain) {
  btnsw.click(function () {
    hid0.hide("fast");
    hid1.hide("fast");
    hid2.hide("fast");
    hid3.hide("fast");
    hid4.hide("fast");
    shwmain.show("fast");
  });
}

showmain2($("#sel_hb_and_others"), $("#art_gasses"), $("#renal"), $("#liver"), $("#reuma"), $("#othertests"), $("#hb_and_others"));
showmain2($("#sel_art_gasses"), $("#hb_and_others"), $("#renal"), $("#liver"), $("#reuma"), $("#othertests"), $("#art_gasses"));
showmain2($("#sel_renal"), $("#hb_and_others"), $("#art_gasses"), $("#liver"), $("#reuma"), $("#othertests"), $("#renal"));
showmain2($("#sel_liver"), $("#hb_and_others"), $("#art_gasses"), $("#renal"), $("#reuma"), $("#othertests"), $("#liver"));
showmain2($("#sel_reuma"), $("#hb_and_others"), $("#art_gasses"), $("#renal"), $("#liver"), $("#othertests"), $("#reuma"));


/*numrange dates*/
num_ranges($("#y_hb"), 2020, 2010, 0);
num_ranges($("#m_hb"), 12, 1, 0);
num_ranges($("#d_hb"), 31, 1, 0);
num_ranges($("#y_thyr"), 2020, 1990, 0);
num_ranges($("#m_thyr"), 12, 1, 0);
num_ranges($("#d_thyr"), 31, 1, 0);
num_ranges($("#y_dimer"), 2020, 2010, 0);
num_ranges($("#m_dimer"), 12, 1, 0);
num_ranges($("#d_dimer"), 31, 1, 0);
num_ranges($("#y_trop"), 2020, 2010, 0);
num_ranges($("#m_trop"), 12, 1, 0);
num_ranges($("#d_trop"), 31, 1, 0);
num_ranges($("#y_bpn"), 2020, 2010, 0);
num_ranges($("#m_bpn"), 12, 1, 0);
num_ranges($("#d_bpn"), 31, 1, 0);
num_ranges($("#y_vih"), 2020, 1990, 0);
num_ranges($("#m_vih"), 12, 1, 0);
num_ranges($("#d_vih"), 31, 1, 0);
num_ranges($("#y_art_gas"), 2020, 2010, 0);
num_ranges($("#m_art_gas"), 12, 1, 0);
num_ranges($("#d_art_gas"), 31, 1, 0);
num_ranges($("#y_renal"), 2020, 2010, 0);
num_ranges($("#m_renal"), 12, 1, 0);
num_ranges($("#d_renal"), 31, 1, 0);
num_ranges($("#y_liver"), 2020, 2010, 0);
num_ranges($("#m_liver"), 12, 1, 0);
num_ranges($("#d_liver"), 31, 1, 0);
num_ranges($("#y_bleed"), 2020, 2010, 0);
num_ranges($("#m_bleed"), 12, 1, 0);
num_ranges($("#d_bleed"), 31, 1, 0);
num_ranges($("#y_f_reum"), 2020, 1990, 0);
num_ranges($("#m_f_reum"), 12, 1, 0);
num_ranges($("#d_f_reum"), 31, 1, 0);
num_ranges($("#y_uns_ana"), 2020, 1990, 0);
num_ranges($("#m_uns_ana"), 12, 1, 0);
num_ranges($("#d_uns_ana"), 31, 1, 0);
num_ranges($("#y_sp_ana"), 2020, 1990, 0);
num_ranges($("#m_sp_ana"), 12, 1, 0);
num_ranges($("#d_sp_ana"), 31, 1, 0);
num_ranges($("#y_anti_ENAs"), 2020, 1990, 0);
num_ranges($("#m_anti_ENAs"), 12, 1, 0);
num_ranges($("#d_anti_ENAs"), 31, 1, 0);
num_ranges($("#y_anca_ab"), 2020, 1990, 0);
num_ranges($("#m_anca_ab"), 12, 1, 0);
num_ranges($("#d_anca_ab"), 31, 1, 0);
num_ranges($("#y_citrul_ab"), 2020, 1990, 0);
num_ranges($("#m_citrul_ab"), 12, 1, 0);
num_ranges($("#d_citrul_ab"), 31, 1, 0);
num_ranges($("#y_anti_ph_lip"), 2020, 1990, 0);
num_ranges($("#m_anti_ph_lip"), 12, 1, 0);
num_ranges($("#d_anti_ph_lip"), 31, 1, 0);



/*lab values range*/
num_ranges($("#hb_value"), 50, 0, 0);
num_ranges($("#tsh"), 200, 0, 1);
num_ranges($("#t_4_total"), 200, 0, 1);
num_ranges($("#t_4_free"), 50, 0, 1);
num_ranges($("#d_dimer_value"), 10000, 0, 0);
num_ranges($("#trop_result"), 100, 0, 1);
num_ranges($("#pep_natr_value"), 10000, 0, 1);
num_ranges($("#pro_pep_natr_value"), 50000, 0, 1);
num_ranges($("#bld_gass_fio2"), 100, 0, 0);
num_ranges($("#bld_gass_ph"), 10, 4, 1);
num_ranges($("#bld_gass_paco2"), 150, 0, 0);
num_ranges($("#bld_gass_pao2"), 150, 0, 0);
num_ranges($("#bld_gass_hco3"), 99, 0, 0);
num_ranges($("#creat"), 150, 0, 1);
num_ranges($("#bun"), 200, 0, 1);
num_ranges($("#bili_tot"), 100, 0, 1);
num_ranges($("#bili_dir"), 50, 0, 1);
num_ranges($("#hep_ast"), 2000, 0, 0);
num_ranges($("#hep_alt"), 2000, 0, 0);
num_ranges($("#hep_fal"), 2000, 0, 0);
num_ranges($("#hep_albumin"), 100, 0, 0);
num_ranges($("#hep_tpt"), 1000, 0, 0);
num_ranges($("#hep_tp"), 100, 0, 0);
num_ranges($("#hep_inr"), 999999, 0, 1);




show_ifnoempty($("#y_hb"), $("#m_hb"));
show_ifnoempty($("#m_hb"), $("#d_hb"));
show_ifnoempty($("#y_thyr"), $("#m_thyr"));
show_ifnoempty($("#m_thyr"), $("#d_thyr"));
show_ifnoempty($("#y_dimer"), $("#m_dimer"));
show_ifnoempty($("#m_dimer"), $("#d_dimer"));
show_ifnoempty($("#y_trop"), $("#m_trop"));
show_ifnoempty($("#m_trop"), $("#d_trop"));
show_ifnoempty($("#y_bpn"), $("#m_bpn"));
show_ifnoempty($("#m_bpn"), $("#d_bpn"));
show_ifnoempty($("#y_vih"), $("#m_vih"));
show_ifnoempty($("#m_vih"), $("#d_vih"));
show_ifnoempty($("#y_renal"), $("#m_renal"));
show_ifnoempty($("#m_renal"), $("#d_renal"));
show_ifnoempty($("#y_art_gas"), $("#m_art_gas"));
show_ifnoempty($("#m_art_gas"), $("#d_art_gas"));
show_ifnoempty($("#y_liver"), $("#m_liver"));
show_ifnoempty($("#m_liver"), $("#d_liver"));
show_ifnoempty($("#y_bleed"), $("#m_bleed"));
show_ifnoempty($("#m_bleed"), $("#d_bleed"));
show_ifnoempty($("#y_f_reum"), $("#m_f_reum"));
show_ifnoempty($("#m_f_reum"), $("#d_f_reum"));
show_ifnoempty($("#y_uns_ana"), $("#m_uns_ana"));
show_ifnoempty($("#m_uns_ana"), $("#d_uns_ana"));
show_ifnoempty($("#y_sp_ana"), $("#m_sp_ana"));
show_ifnoempty($("#m_sp_ana"), $("#d_sp_ana"));
show_ifnoempty($("#y_anti_ENAs"), $("#m_anti_ENAs"));
show_ifnoempty($("#m_anti_ENAs"), $("#d_anti_ENAs"));
show_ifnoempty($("#y_anti_ph_lip"), $("#m_anti_ph_lip"));
show_ifnoempty($("#m_anti_ph_lip"), $("#d_anti_ph_lip"));
show_ifnoempty($("#y_anca_ab"), $("#m_anca_ab"));
show_ifnoempty($("#m_anca_ab"), $("#d_anca_ab"));
show_ifnoempty($("#y_citrul_ab"), $("#m_citrul_ab"));
show_ifnoempty($("#m_citrul_ab"), $("#d_citrul_ab"));
