/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/
hide_show_savebutton([$("#d_ecg"), $("#axis"), $("#rythm"), $("#pattern")], $("#save_ecg"));
hide_show_savebutton([$("#d_spir"), $("#cvf_lt"), $("#vef1_lt")], $("#save_spir"));
hide_show_savebutton([$("#d_sixmw"), $("#walk_meters"), $("#walk_fio2"), $("start_sato2"), $("#end_sato2"), $("#borg")], $("#sixmin_save"));
hide_show_savebutton([$("#d_cpst"), $("#vo2max_peak"), $("#pa_sist"), $("pa_dias"), $("#pulse_vo2")], $("#vo2_save"));

/*Cálculo automático del delta de VEF1 (Volumen espiratorio forzado del 1er segundo)*/

function delta_vef1(pre_vef, post_vef, dif_vef_val) {
    function delta_vef(pre_vef, post_vef, dif_vef_val) {
        if (pre_vef.val() !== "" && post_vef.val() !== "") {
            var dif_vef = Math.round((post_vef.val() - pre_vef.val()) * 10000 / pre_vef.val()) / 100;
            dif_vef_val.val(dif_vef);
        }
    }
    pre_vef.keyup(function() {
        delta_vef(pre_vef, post_vef, dif_vef_val);
    });
    post_vef.keyup(function() {
        delta_vef(pre_vef, post_vef, dif_vef_val);
    });
}

/*Cálculo automático del delta de Capacidad Vital Forzada*/

function delta_abs_vef(pre_vef1, post_vef1, dif_vef1_val) {
    function calc_delta_abs_vef(pre_vef1, post_vef1, dif_vef1_val) {
        if (pre_vef1.val() !== "" && post_vef1.val() !== "") {
            var dif_vef1 = Math.round((post_vef1.val() - pre_vef1.val()) * 1000);
            dif_vef1_val.val(dif_vef1);
        }
    }
    pre_vef1.keyup(function() {
        calc_delta_abs_vef(pre_vef1, post_vef1, dif_vef1_val);
    });
    post_vef1.keyup(function() {
        calc_delta_abs_vef(pre_vef1, post_vef1, dif_vef1_val);
    });
}

/*Cálculo de la relación VEF1/CVF*/

function vef_cvf(vef1, cvf, vef1_cvf_val) {
    function calc_vef_cvf(vef1, cvf, vef1_cvf_val) {
        if (vef1.val() !== "" && cvf.val() !== "") {
            var vef1_cvf = Math.round((vef1.val() / cvf.val()) * 10000) / 100;
            vef1_cvf_val.val(vef1_cvf);
        }
    }
    cvf.keyup(function() {
        calc_vef_cvf(vef1, cvf, vef1_cvf_val);
    });
    vef1.keyup(function() {
        calc_vef_cvf(vef1, cvf, vef1_cvf_val);
    });
}

function showmain_cvp(btnsw, hid1, hid2, hid3, shwmain) {
    btnsw.click(function() {
        hid1.hide("fast");
        hid2.hide("fast");
        hid3.hide("fast");
        shwmain.show("fast");
    });
}

showmain_cvp($("#sel_elecg"), $("#spir"), $("#sixm_walk"), $("#cp_test"), $("#elecg"));
showmain_cvp($("#sel_spir"), $("#elecg"), $("#sixm_walk"), $("#cp_test"), $("#spir"));
showmain_cvp($("#sel_sixm_walk"), $("#elecg"), $("#spir"), $("#cp_test"), $("#sixm_walk"));
showmain_cvp($("#sel_cp_test"), $("#elecg"), $("#spir"), $("#sixm_walk"), $("#cp_test"));

$(document).ready(function() {
    $("#spir").hide();
    $("#sixm_walk").hide();
    $("#cp_test").hide();
});


/*icon exchanger syntax
    main_i[class], icon_1,   icon_2,   icon_3,    icon_main,
(icon positioning) pos_ic_1, pos_ic_2, pos_ic_3,  pos_main,
(icon titles)      title1,   title2,   title3,    maintitle
*/
icon_exchanger($(".main_icon"), $("#basic_eval"), $("#blood_test"), $("#clin_images"), $("#performance"), '0  75px', '-92px 75px', '-276px 75px', '-184px 0px', 'Evaluaci&oacute;n <br>cl&iacute;nica', 'Pruebas<br>de sangre', 'Im&aacute;genes diagn&oacute;sticas', 'Desempe&ntilde;o cardiovascular');



/*sprite_imgs($("#basic_eval"),$(".main_icon"),'0 0','-182px 0');
sprite_imgs($("#blood_test"),$(".main_icon"),'-91px 0','-182px 0');
sprite_imgs($("#clin_images"),$(".main_icon"),'-273px 0','-182px 0');
sprite_imgs($("#performance"),$(".main_icon"),'-182px 0','-182px 0');*/


show_ifnoempty($("#y_ecg"), $("#m_ecg"));
show_ifnoempty($("#m_ecg"), $("#d_ecg"));
show_ifnoempty($("#y_spir"), $("#m_spir"));
show_ifnoempty($("#m_spir"), $("#d_spir"));
show_ifnoempty($("#y_sixmw"), $("#m_sixmw"));
show_ifnoempty($("#m_sixmw"), $("#d_sixmw"));
show_ifnoempty($("#y_cpst"), $("#m_cpst"));
show_ifnoempty($("#m_cpst"), $("#d_cpst"));

num_ranges($("#y_ecg"), 2020, 2010, 0);
num_ranges($("#m_ecg"), 12, 1, 0);
num_ranges($("#d_ecg"), 31, 1, 0);
num_ranges($("#y_spir"), 2020, 2010, 0);
num_ranges($("#m_spir"), 12, 1, 0);
num_ranges($("#d_spir"), 31, 1, 0);
num_ranges($("#y_sixmw"), 2020, 2010, 0)
num_ranges($("#m_sixmw"), 12, 1, 0);
num_ranges($("#d_sixmw"), 31, 1, 0);
num_ranges($("#y_cpst"), 2020, 2010, 0);
num_ranges($("#m_cpst"), 12, 1, 0);
num_ranges($("#d_cpst"), 31, 1, 0);
num_ranges($("#cvf_lt"), 10, 0, 1);
num_ranges($("#vef1_lt"), 10, 0, 1);
num_ranges($("#post_cvf_lt"), 10, 0, 1);
num_ranges($("#post_vef1_lt"), 10, 0, 1);
num_ranges($("#dlco_percent"), 100, 0, 0);
num_ranges($("#walk_meters"), 1000, 0, 0);
num_ranges($("#walk_fio2"), 100, 0, 0);
num_ranges($("#start_sato2"), 100, 0, 0);
num_ranges($("#end_sato2"), 100, 0, 0);
num_ranges($("#vo2max_peak"), 100, 0, 0);
num_ranges($("#pa_sist"), 250, 0, 0);
num_ranges($("#pa_diast"), 250, 0, 0);
num_ranges($("#pulse_vo2"), 300, 0, 0);


vef_cvf($("#vef1_lt"), $("#cvf_lt"), $("#vef1_cvf"));
vef_cvf($("#post_vef1_lt"), $("#post_cvf_lt"), $("#post_vef1_cvf"));

delta_abs_vef($("#vef1_lt"), $("#post_vef1_lt"), $("#delta_abs_vef"));
delta_vef1($("#vef1_lt"), $("#post_vef1_lt"), $("#delta_vef1")); /**/
