<div id="basal" >
    <div CLASS="well well-small">
        <h4>DATOS BASALES </h4>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Fecha examen:</div>
        <div class="span1"><input type="text" id="year" placeholder="A&ntilde;o" class="span1"></div>
        <div class="span1"><input type="text" id="month" placeholder="Mes" class="span1"></div>
        <div class="span1"><input type="text" id="day" placeholder="D&iacute;a" class="span1"></div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Peso (Kg)</div>
        <div class="span1"><input type="text" id="wgt" placeholder="Kgs" class="span1"></div>
        <div class=" span1" style="text-align:right">Talla (M.)</div>
        <div class="span1"><input type="text" id="hgt" placeholder="Mts" class="span1"></div>
        <div class="span3" id="bsa"></div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Res. vasc. pulmonar</div>
        <div class="span2">
            <input type="text" id="res_vasc_pulm" placeholder="res. vsc. pulmonar" class="span2"/>
        </div>
        <div class="span2">
            <select id="res_vasc_pulm_unit" class="span2">
                <option>dinas</option>
                <option>woods</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Res. vasc. sist&eacute;mica</div>
        <div class="span2">
            <input type="text" id="res_vasc_syst" placeholder="res. vsc. sist&eacute;mica" class="span2">
        </div>
        <div class="span2">
            <select id="res_vasc_syst_unit" class="span2">
                <option>dinas</option>
                <option>woods</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">P.A. <b>pulmonar</b></div>
        <div class="span1">
            <input type="text" id="pap_sys" placeholder="sist&oacute;l." class="span1">
        </div>
        <div class="span1">
            <input type="text" id="pap_dias" placeholder="diast&oacute;l." class="span1">
        </div>
        <div class="span2">
            <b><span id="pam_pulm"></span></b>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">P.A. <b>sist&eacute;mica</b></div>
        <div class="span1">
            <input type="text" id="pas_sys" placeholder="sist&oacute;l." class="span1">
        </div>
        <div class="span1">
            <input type="text" id="pas_dias" placeholder="diast&oacute;l." class="span1">
        </div>
        <div class="span2">
            <b><span id="pam_stm"></span></b>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Pres aur&iacute;cula derecha</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="rt_atr_press" placeholder="PAD" class="span2"><span class="add-on">mm/Hg</span>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Pres. cu&ntilde;a pulmonar</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="pulm_wedg_press" placeholder="PCP" class="span2"><span class="add-on">mm/Hg</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Gradiente transpulmonar</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="pulm_gradient" placeholder="GTP" class="span2" disabled>
                <span class="add-on">mm/Hg</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Gasto cardiaco</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="cardiac_outp" placeholder="CO-lt/min" class="span2"><span class="add-on">Lt/min</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">&Iacute;ndice cardiaco</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="cardiac_index" placeholder="L/min/Mt2" class="span2" disabled>
                <span class="add-on">Lt/min/Mt2</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Oximetr&iacute;a %</div>
        <div class="span1">
            <input type="text" id="rt_atr_oxim" placeholder="au der." class="span1">
        </div>
        <div class="span1">
            <input type="text" id="rt_ventr_oxim" placeholder="vt. der." class="span1">
        </div>
        <div class="span1">
            <input type="text" id="pulm_artery" placeholder="art pulm." class="span1">
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Frecuencia cardiaca</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" id="heart_rate" placeholder="pulso" class="span2"><span class="add-on">lat/min</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Se hizo test vasorreactividad?</div>
        <div class="span2">
            <select id="vreac_test_done" class="span2">
                <option value=""></option>
                <option value="no">no</option>
                <option value="si">si</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="span6">
            <button class="btn span6" id="save_rt_cath">GRABAR</button>
        </div>
    </div>
    <br>
    <br>
</div>