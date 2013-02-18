<div id="reactiv">
    <div CLASS="well well-small">
        <h5>TEST DE VASOREACTIVIDAD </h5>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Fecha examen:</div>
        <div class="span1">
            <input type="text" id="year2" placeholder="A&ntilde;o" class="span1" disabled>
        </div>
        <div class="span1">
            <input type="text" id="month2" placeholder="Mes" class="span1" disabled>
        </div>
        <div class="span1">
            <input type="text" id="day2" placeholder="D&iacute;a" class="span1" disabled>
        </div>

    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Medicamento</div>
        <div class="span3">
            <select id="test_drug" class="span3">
                <option value=""></option>
                <option value="adenosina">Adenosina</option>
                <option value="epoprosterol">Epoprosterol</option>
                <option value="iloprost">Iloprost</option>
                <option value="ox_nitrico">&Oacute;xido n&iacute;trico</option>
            </select>
        </div>
    </div>
    <div id="drugdependant">
        <div class="row">
            <div class="span2" style="text-align:right">Res. vasc.r pulmonar</div>
            <div class="span1">
                <input type="text" id="post_res_vasc_pulm" placeholder="RVP" class="span1"/>
            </div>
            <div class="span2">
                <select id="post_res_vasc_pulm_unit" class="span2">
                    <option>dinas</option>
                    <option>woods</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Res. vasc. sist</div>
            <div class="span1">
                <input type="text" id="post_res_vasc_syst" placeholder="RVS" class="span1">
            </div>
            <div class="span2">
                <select id="post_res_vasc_syst_unit" class="span2">
                    <option>dinas</option>
                    <option>woods</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">P.A. <b>Pulmonar</b></div>
            <div class="span1">
                <input type="text" id="post_pap_sys" placeholder="sist&oacute;l." class="span1">
            </div>
            <div class="span1">
                <input type="text" id="post_pap_dias" placeholder="diast&oacute;l." class="span1">
            </div>
            <div class="span2">
                <b><span id="post_pam_pulm"></span></b>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">P.A. <b>Sist&eacute;mica</b></div>
            <div class="span1">
                <input type="text" id="post_pas_sys" placeholder="sist&oacute;l." class="span1">
            </div>
            <div class="span1">
                <input type="text" id="post_pas_dias" placeholder="diast&oacute;l." class="span1">
            </div>
            <div class="span2">
                <b><span id="post_pam_stm"></span></b>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Pres. aur&iacute;cula derecha</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_rt_atr_press" placeholder="PAD" class="span2">
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Pres. cu&ntilde;a pulmonar</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_pulm_wedg_press" placeholder="PCP" class="span2">
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Gradiente transpulmonar</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_pulm_gradient" placeholder="GTP" class="span2" disabled>
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Gasto cardiaco</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_cardiac_outp" placeholder="CO -L/min" class="span2">
                    <span class="add-on">Lt/min</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">&Iacute;ndice cardiaco</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_cardiac_index" placeholder="L/min/Mt2" class="span2" disabled>
                    <span class="add-on">Lt/min/Mt2</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Oximetr&iacute;a %</div>
            <div class="span1">
                <input type="text" id="post_rt_atr_oxim" placeholder="aur der" class="span1">
            </div>
            <div class="span1">
                <input type="text" id="post_rt_ventr_oxim" placeholder="vt der" class="span1">
            </div>
            <div class="span1">
                <input type="text" id="post_pulm_artery" placeholder="at pulm." class="span1">
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Frecuencia cardiaca</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_heart_rate" placeholder="pulso" class="span2">
                    <span class="add-on">lat/min</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">RESULTADO</div>
            <div class="span4"  id="reactivity">
                No se hizo test
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <button class="btn span6">GRABAR</button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--end of "drugdependant" -->
    </div>
</div>