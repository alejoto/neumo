$(document).ready(function() {$("#artergph_location").hide("fast");});
$("#artergph_TEP").change(function() {
    if ($("#artergph_TEP").val()===""||$("#artergph_TEP").val()==="normal") {
        $("#artergph_location").hide("fast");
    }
    else {$("#artergph_location").show("fast");}
});


/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#d_ecoc"), $("#doppl_type"), $("#doppl_syst_press"), $("#eject_fract")], $("#ecoc_save"));
hide_show_savebutton([$("#d_xray"), $("#alveolar_infiltrates"), $("#hypoperfusion_areas"), $("#right_heart_cardiomegs")], $("#xray_save"));
hide_show_savebutton([$("#d_tc"), $("#a_tc_main_pulm_art_diamt"), $("#a_tc_rt_pulm_art_diamt"), $("#a_tc_left_pulm_art_diamt"), $("#a_tc_tep_pattern"), $("#a_tc_congenit")], $("#tc_save"));
hide_show_savebutton([$("#d_rmn"), $("#mri_fevd"), $("#mri_main_art_diam"), $("#mri_rt_art_diam"), $("#mri_lt_art_diam"), $("#mri_rt_heart_dilat"), $("#mri_defects")], $("#mri_save"));
hide_show_savebutton([$("#d_artg"), $("#artergph_TEP"), ], $("#artergph_save"));
hide_show_savebutton([$("#d_gamma"), $("#gamma_tep")], $("#gamma_save"));
hide_show_savebutton([$("#d_ecoleg"), $("#legsdoppler_result_right"), $("#legsdoppler_result_left")], $("#legsdoppler_save"));

function other_cardiac(sel,showed) {
    $(document).ready(function() {
        showed.hide();
    });
    sel.change(function() {
        if (sel.val()=="other") {showed.show("fast");}
        else showed.hide("fast");
    });
}


function showmain_img(btnsw,hid1,hid2,hid3,hid4,hid5,hid6,shwmain){
    btnsw.click(function(){
        hid1.hide("fast");
        hid2.hide("fast");
        hid3.hide("fast");
        hid4.hide("fast");
        hid5.hide("fast");
        hid6.hide("fast");
        shwmain.show("fast");
    });
}

$(document).ready(function() {$("#x_ray").hide();$("#tc_angio").hide();$("#mri").hide();$("#pulm_arteriography").hide();$("#gammagr").hide();$("#duplex_legs").hide();});



/*icon exchanger syntax
    main_i[class], icon_1,   icon_2,   icon_3,    icon_main,
(icon positioning) pos_ic_1, pos_ic_2, pos_ic_3,  pos_main,
(icon titles)      title1,   title2,   title3,    maintitle
*/
icon_exchanger($(".main_icon"),$("#basic_eval"),$("#blood_test"),$("#performance"),$("#clin_images")
              ,'0  75px','-92px 75px','-184px 75px','-276px 0','Evaluación <br>clínica',
              'Pruebas<br>en sangre','Desempeño cardiovascular','Imágenes diagnósticas');


showmain_img($("#sel_ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#ecocardio"))
showmain_img($("#sel_x_ray"),$("#ecocardio"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#x_ray"))
showmain_img($("#sel_tc_angio"),$("#ecocardio"),$("#x_ray"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#tc_angio"))
showmain_img($("#sel_mri"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#mri"))
showmain_img($("#sel_pulm_arteriography"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#gammagr"),$("#duplex_legs"),$("#pulm_arteriography"))
showmain_img($("#sel_gammagr"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#duplex_legs"),$("#gammagr"))
showmain_img($("#sel_duplex_legs"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"))

num_ranges($("#y_xray"), 2020, 2010,0);
num_ranges($("#m_xray"), 12, 1,0);
num_ranges($("#d_xray"), 31, 1,0);
num_ranges($("#y_tc"), 2020, 2010,0);
num_ranges($("#m_tc"), 12, 1,0);
num_ranges($("#d_tc"), 31, 1,0);
num_ranges($("#y_ecoc"), 2020, 2010,0);
num_ranges($("#m_ecoc"), 12, 1,0);
num_ranges($("#d_ecoc"), 31, 1,0);
num_ranges($("#y_ecoleg"), 2020, 2010,0);
num_ranges($("#m_ecoleg"), 12, 1,0);
num_ranges($("#d_ecoleg"), 31, 1,0);
num_ranges($("#y_rmn"), 2020, 2010,0);
num_ranges($("#m_rmn"), 12, 1,0);
num_ranges($("#d_rmn"), 31, 1,0);
num_ranges($("#y_artg"), 2020, 2010,0);
num_ranges($("#m_artg"), 12, 1,0);
num_ranges($("#d_artg"), 31, 1,0);
num_ranges($("#y_gamma"), 2020, 2010,0);
num_ranges($("#m_gamma"), 12, 1,0);
num_ranges($("#d_gamma"), 31, 1,0);
num_ranges($("#cardiothrx_index"), 1, 0,1);
num_ranges($("#a_tc_main_pulm_art_diamt"), 120, 0,0);
num_ranges($("#a_tc_rt_pulm_art_diamt"), 120, 0,0);
num_ranges($("#a_tc_left_pulm_art_diamt"), 120, 0,0);
num_ranges($("#mri_main_art_diam"), 120, 0,0);
num_ranges($("#mri_rt_art_diam"), 120, 0,0);
num_ranges($("#mri_lt_art_diam"), 120, 0,0);
num_ranges($("#doppl_syst_press"), 300, 0,0);
num_ranges($("#eject_fract"), 100, 0,0);
num_ranges($("#tapse"), 9, 0,1);


show_ifnoempty($("#y_xray"),$("#m_xray"));
show_ifnoempty($("#m_xray"),$("#d_xray"));
show_ifnoempty($("#y_tc"),$("#m_tc"));
show_ifnoempty($("#m_tc"),$("#d_tc"));
show_ifnoempty($("#y_ecoc"),$("#m_ecoc"));
show_ifnoempty($("#m_ecoc"),$("#d_ecoc"));
show_ifnoempty($("#y_ecoleg"),$("#m_ecoleg"));
show_ifnoempty($("#m_ecoleg"),$("#d_ecoleg"));
show_ifnoempty($("#y_rmn"),$("#m_rmn"));
show_ifnoempty($("#m_rmn"),$("#d_rmn"));
show_ifnoempty($("#y_artg"),$("#m_artg"));
show_ifnoempty($("#m_artg"),$("#d_artg"));
show_ifnoempty($("#y_gamma"),$("#m_gamma"));
show_ifnoempty($("#m_gamma"),$("#d_gamma"));

other_cardiac($("#a_tc_congenit"),$("#other_defects1"));
other_cardiac($("#doppl_cong_defects"),$("#other_defects2"));
other_cardiac($("#mri_defects"),$("#other_defects3"));

