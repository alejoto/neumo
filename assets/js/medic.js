 
/* Recordatorio "requerido" para campos formulario utilizando Tooltip de TwitterBootstrap*/

function tiprequired(reqfld) {
    $(document).ready(function() {
        reqfld.blur(function() {
            if (reqfld.val() == "") {
                reqfld.tooltip({
                    title: 'Requerido',
                    placement: 'right'
                });
                reqfld.tooltip('show');
            } else reqfld.tooltip('destroy');
        });
    });
}

/* Mostrar/esconder campos si el previo estÃ¡ vacÃ­o o con datos*/

function hideshow1(main, second) {
    if (main.val() != "") {
        second.show("fast");
    }
    else {
        second.hide("fast");
    }
}

/* FunciÃ³n hideshow enlazada con mÃ©todo keyup (jquery)*/

function show_ifnoempty(one, two) {
    $(document).ready(function() {
        two.hide();
        one.keyup(function() {
            hideshow1(one, two)
        })
    })
}

/* FunciÃ³n hideshow enlazada con mÃ©todo change (jquery)*/

function hide_if_empty(n_empty, hid_shw) {
    $(document).ready(function() {
        hid_shw.hide();
    })

    n_empty.change(function() {
        hideshow1(n_empty, hid_shw);
    })
}

function show_on_check(chk, shw_c) {
$(document).ready(function() {shw_c.hide();})
    chk.change(function() {
    	alert(chk.name);
        if (chk.checked) {
            shw_c.show("fast");
        }
        else {
            shw_c.hide("fast");
        }
    })
}

/*Show button when "required" are filled out.  NOT WORKING WITH RADIO OR CHECKBOX TAGS!*/
function hide_show_savebutton(fields,button) {
    $(document).ready(function() {
        button.hide();
    });
    function filled_fields(){
        filledfields=0;
        var i=0;
        for (;fields[i];)
        {
            if(fields[i].val()!=="") {filledfields=filledfields+1;}
            i++;
        }
        if (fields.length==filledfields) {button.show("fast");}
        else {button.hide("fast");}
    }
    var ii=0;
    
    var typfd;

    for (;fields[ii];)
    {
        typfd=fields[ii].prop("tagName");
        if (typfd==="SELECT") {
            fields[ii].change(function(){filled_fields();});
        } 
        else {
            fields[ii].keyup(function(){filled_fields();});
        }
        
        ii++;
    }
}


/*bloqueo de teclado alfabÃ©tico, solo permite nÃºmeros ENTEROS*/

function onlynumber(o_nb) {
    o_nb.keydown(function(event) {
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 45 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {} else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });
}

/*Solo nÃºmeros decimales*/

function floatnb(fltnum) {
    fltnum.keypress(function(eve) {
        if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0)) {
            eve.preventDefault();
        }
        // this part is when left part of number is deleted and leaves a . in the leftmost position. For example, 33.25, then 33 is deleted
        fltnum.keyup(function(eve) {
            if ($(this).val().indexOf('.') == 0) {
                $(this).val($(this).val().substring(1));
            }
        });
    });
}

/*bloqueo de valores por fuera de rango predefinido. 
    Ãšltimo atributo "int_float" si=0 solo permite enteros, de lo contrario permite decimales*/

function num_ranges(vale, maxi, mini, int_float) {
    $(document).ready(function() {
        if (int_float == 0) {
            onlynumber(vale);
        } else {
            floatnb(vale)
        };

        vale.blur(function() {
            if (vale.val() > maxi && vale.val() != "") {
                vale.popover('destroy');
                vale.popover({
                    title: "Valor debe ser menor o igual a " + maxi,
                    placement: 'right'
                });
                vale.popover('show');
                vale.focus();

            }
            else if (vale.val() < mini && vale.val() != "") {
                vale.popover('destroy');
                vale.popover({
                    title: "Valor debe ser mayor o igual a " + mini,
                    placement: 'right'
                })
                vale.popover('show');
                vale.focus();
            } /**/
            else vale.popover('destroy');
        });
    })
}

/*Function only right date values*/
function hmd_dateformat(dr_y, dr_m, dr_d, join_date) {
  show_ifnoempty(dr_y, dr_m);
  show_ifnoempty(dr_m, dr_d);
  num_ranges(dr_m, 12, 1, 0);
  dr_y.keyup(function () {dr_d.val("")});
  dr_m.keyup(function () {dr_d.val("")});
  dr_d.keyup(function () {
    date_range(dr_y, dr_m, dr_d);
    join_date.val(dr_y.val() + '-' + dr_m.val() + '-' + dr_d.val());
  });

  function date_range(dr_y, dr_m, dr_d) {
    var bisester = dr_y.val() % 4;
    if (dr_m.val() == "2" && bisester == 0) {
      num_ranges(dr_d, 29, 1, 0);
    } else if (dr_m.val() == "2") {
      num_ranges(dr_d, 28, 1, 0);
    } else if (dr_m.val() == "1" || dr_m.val() == "3" || dr_m.val() == "5" || dr_m.val() == "7" || dr_m.val() == "8" || dr_m.val() == "10" || dr_m.val() == "12") {
      num_ranges(dr_d, 31, 1, 0);
    } else {
      num_ranges(dr_d, 30, 1, 0);
    }
  }
}



/*lowercase to uppercase*/
function up_cas(lwc) {
    lwc.keyup(function() {
        lwc.val($(this).val().toUpperCase());
    });
}


/*Toggle asociado a botÃ³n*/

function clickhideshow(butn, hd, sw) {
    butn.click(function() {
        hd.hide("fast");
        sw.show("fast");
    })
}

/**/
function sprite_imgs(smicon,bicon,pos,base) {
    $(document).ready(function() {
        bicon.css('background-position', base);
        smicon.mouseover(function() {
            bicon.css('background-position', pos);
        });
        smicon.mouseout(function() {
            bicon.css('background-position', base);
        });
    });
}

function change_title(smicon,title,maintext,text2) {
    $(document).ready(function() {
        smicon.mouseover(function() {
            title.html(text2);
            title.css('color', 'gray');
        });
        smicon.mouseout(function() {
            title.html(maintext);
            title.css('color', 'black');
        });
    });
}

function icon_exchanger(main_i,icon_1,icon_2,icon_3,icon_main,pos_ic_1,pos_ic_2,pos_ic_3,pos_main,title1,title2,title3,maintitle){
sprite_imgs(icon_1,main_i,pos_ic_1, pos_main);
sprite_imgs(icon_2,main_i,pos_ic_2, pos_main);
sprite_imgs(icon_main,main_i,pos_main, pos_main);
sprite_imgs(icon_3,main_i,pos_ic_3, pos_main);

change_title(icon_1,$("#left_title"),maintitle,title1);
change_title(icon_2,$("#left_title"),maintitle,title2);
change_title(icon_3,$("#left_title"),maintitle,title3);
}



/*FÃ³rmula del Ã¡rea de superficie corporal*/

function body_surf_area(weight, height, result) {
    if (weight != "" && height != "") {
        var bsa = Math.sqrt(weight.val() * height.val() / 36);
        var bsaround = Math.round(bsa * 10000) / 10000;
        var messg_bsa = "<b>SC " + bsaround + "Mt2</b>";
        result.html(messg_bsa);
    }
}

function trigger_bsa(weight, height, result) {
    weight.keyup(function() {
        body_surf_area(weight, height, result)
    });
    height.keyup(function() {
        body_surf_area(weight, height, result)
    });
}
        
/*fÃ³rmula matemÃ¡tica estÃ¡ndar para calcular la PAM*/

function pamformula(sist, diast, pamtag) {
    if (diast.val() != "" && sist.val() != "") {
        var pam = Math.round((sist.val() - diast.val()) / 3 + diast.val() * 1);
        pamtag.html(" PAM = " + pam + "mmHg");
    }
    else {
        pamtag.html("");
    }
}

function p_a_m(sist, diast, pamtag) {
    $(document).ready(function() {
        sist.blur(function() {
            pamformula(sist, diast, pamtag);
        });
        diast.blur(function() {
            pamformula(sist, diast, pamtag);
        });
    });
}

/*TPG formula*/

function tgp_formula(pulmwedg, html_pam, pulmgrad) {
    pulmwedg.keyup(function() {
        var pam_pulm = html_pam.html();
        pam_pulm = pam_pulm.replace(" PAM = ", "");
        pam_pulm = pam_pulm.replace("mmHg", "");
        var transp_gradient = pam_pulm * 1 - pulmwedg.val() * 1;
        pulmgrad.val(transp_gradient);
    });
}

/*FÃ³rmula del Ã­ndice cardÃ­aco*/

function c_idx(wg, hg, co, tg) {
    var bsa = Math.sqrt(wg.val() * hg.val() / 36);
    var cardiac_index = co.val() / bsa;
    cardiac_index = Math.round(cardiac_index * 100) / 100;
    tg.val(cardiac_index);
    }
function trigger_c_idx(wg, hg, co, tg) {
    wg.keyup(function() {
        c_idx(wg, hg, co, tg);
    });
    hg.keyup(function() {
        c_idx(wg, hg, co, tg);
    })
    co.keyup(function() {
        c_idx(wg, hg, co, tg);
    })
}
    
/*Criterios de reactividad*/
/*Resultado test vasorreactividad: debe cumplir tres criterios simultÃ¡neamente:
- dism 10mmHg PAM pulm pre y post
- PAM pulm por debajo de 40
- Gasto cardiaco igual o mayor.
*/

function vasorreact_test(pulm_s, pulm_d, post_pulm_s, post_pulm_d, coutp, post_coutp) {
    var prepam = (2 * pulm_d.val() + 1 * pulm_s.val()) / 3;
    prepam = Math.round(prepam);
    var postpam = (2 * post_pulm_d.val() + 1 * post_pulm_s.val()) / 3;
    postpam = Math.round(postpam);
    var preco = coutp.val();
    var postco = post_coutp.val();
    var delta_pam = prepam - postpam;
    var delta_co = postco - preco;
    var co_criterium;
    if (delta_co == 0) {
        co_criterium = "Gasto cardiaco igual";
    } else {
        co_criterium = "Gasto cardiaco aument&oacute;";
    }
    if (postpam <= 40 && delta_pam >= 10 && delta_co >= 0) {
        $("#reactivity").attr("class","span4 alert alert-success");
        $("#reactivity").html("TEST REACTIVO!<br>Criterios:<br> PAM post-test:" 
            + postpam 
            + "mmHg<br>Disminuci&oacute;n PAM: " 
            + delta_pam 
            + "mmHg<br>" 
            + co_criterium);
    }
    else {
        $("#reactivity").attr("class","span4 alert alert-error");
        $("#reactivity").html("no reactivo");
    }
}

/*vasoreactivity test trigger*/
function trigger_v_react_test(syst,diast,p_syst,p_diast,pre_co,post_co){
    p_syst.keyup(function() {vasorreact_test(syst, diast, p_syst, p_diast, pre_co, post_co);});
    p_diast.keyup(function() {vasorreact_test(syst, diast, p_syst, p_diast, pre_co, post_co);});
    post_co.keyup(function() {vasorreact_test(syst, diast, p_syst, p_diast, pre_co, post_co);});
}


/*Relleno automÃ¡tico de campo correspondiente a valor exactamente igual de otro campo*/

function samevalue(origin, targeted) {
    origin.keyup(function() {
        targeted.val(origin.val());
    })
}