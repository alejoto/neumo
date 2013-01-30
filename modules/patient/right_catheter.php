
<div id="basal">
  <div CLASS="well well-small">
    <h5>DATOS BASALES </h5>
  </div>
  <div class="row">
    <div class="span2" style="text-align:right">Fecha examen:</div>
    <div class="span1"><input type="text" id="year" placeholder="Año" class="span1"></div>
    <div class="span1"><input type="text" id="month" placeholder="Mes" class="span1"></div>
    <div class="span1"><input type="text" id="day" placeholder="Día" class="span1"></div>
  </div>
  <div class="row">
    <div class="span2" style="text-align:right">Peso (Kg)</div>
    <div class="span1"><input type="text" id="wgt" placeholder="Kgs" class="span1"></div>
    <div class=" span1" style="text-align:right">Talla (M.)</div>
    <div class="span1"><input type="text" id="hgt" placeholder="Mts" class="span1"></div>
    <div class="span3" id="bsa"></div>
  </div>
  <form class="form-horizontal">
    <div class="control-group"><label class="control-label" for="res_vasc_pulm">Res. vasc. pulmonar</label>
      <div class="controls"><input type="text" id="res_vasc_pulm" placeholder="res. vsc. pulmonar" class="span2">
        <select id="res_vasc_pulm_unit" class="span2">
          <option>dinas</option>
          <option>woods</option>
        </select>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="res_vasc_syst">Res. vasc.sistémica</label>
      <div class="controls"><input type="text" id="res_vasc_syst" placeholder="res. vsc. sistémica"  class="span2">
        <select id="res_vasc_syst_unit" class="span2">
          <option>dinas</option>
          <option>woods</option>
        </select>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="pap_sys">Pres. arterial <b>pulmonar</b></label>
      <div class="controls"><input type="text" id="pap_sys" placeholder="sistól." class="span1">
        <input type="text" id="pap_dias" placeholder="diastól." class="span1"><b><span id="pam_pulm"></span></b>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="pas_sys">Pres. arterial <b>sistémica</b></label>
      <div class="controls"><input type="text" id="pas_sys" placeholder="sistól." class="span1">
        <input type="text" id="pas_dias" placeholder="diastól." class="span1"><b><span id="pam_stm"></span></b>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="rt_atr_press">Pres aurícula derecha</label>
      <div class="controls">
        <div class="input-append">
          <input type="text" id="rt_atr_press" placeholder="PAD" class="span2"><span class="add-on">mm/Hg</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="pulm_wedg_press">Pres. cuña pulmonar</label>
      <div class="controls">
        <div class="input-append">
          <input type="text" id="pulm_wedg_press" placeholder="PCP" class="span2"><span class="add-on">mm/Hg</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="pulm_gradient">Gradiente transpulmonar</label>
      <div class="controls">
        <div class="input-append">
          <input type="text" id="pulm_gradient" placeholder="GTP" class="span2" disabled>
          <span class="add-on">mm/Hg</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="cardiac_outp">Gasto cardiaco</label>
      <div class="controls">
        <div class="input-append">
          <input type="text" id="cardiac_outp" placeholder="CO-lt/min" class="span2"><span class="add-on">Lt/min</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="cardiac_index">Índice cardiaco</label>
      <div class="controls">
        <div class="input-append">
          <input type="text" id="cardiac_index" placeholder="L/min/Mt2" class="span2" disabled>
          <span class="add-on">Lt/min/Mt2</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="rt_atr_oxim">Oximetría AD/VD/AP %</label>
      <div class="controls">
        <input type="text" id="rt_atr_oxim" placeholder="aur. derecha" class="span2">
        <input type="text" id="rt_ventr_oxim" placeholder="vent. derecho" class="span2">
        <input type="text" id="pulm_artery" placeholder="art. pulmonar" class="span2">
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="heart_rate">Frecuencia cardiaca</label>
      <div class="controls">
        <div class="input-append"><input type="text" id="heart_rate" placeholder="pulso" class="span2"><span class="add-on">lat/min</span>
        </div>
      </div>
    </div>
    <div class="control-group"><label class="control-label" for="vreac_test_done">Se hizo test vasorreactividad?</label>
      <div class="controls">
        <select id="vreac_test_done" class="span2">
          <option value=""></option>
          <option value="no">no</option>
          <option value="si">si</option>
        </select>
      </div>
    </div>
    <button class="btn span6" id="save_rt_cath">GRABAR</button>
  </form><br><br>
</div>
<div id="reactiv">
  <div CLASS="well well-small">
    <h5>TEST DE VASOREACTIVIDAD </h5>
  </div>
  <div class="spam8">
    Fecha examen:
    <input type="text" id="year2" placeholder="Año" class="span1">
    <input type="text" id="month2" placeholder="Mes" class="span1">
    <input type="text" id="day2" placeholder="Día" class="span1">
  </div>
    <form class="form-horizontal">
      <div class="control-group"><label class="control-label" for="test_drug"></label><div class="controls"><div class="input-append">
        <select id="test_drug">
          <option value=""></option>
          <option value="adenosina">Adenosina</option>
          <option value="epoprosterol">Epoprosterol</option>
          <option value="iloprost">Iloprost</option>
          <option value="ox_nitrico">Óxido nítrico</option>
        </select><span class="add-on">Medicamento</span></div></div>
      </div>
    </form>
    <div id="drugdependant">
      <form class="form-horizontal">
        <div class="control-group"><label class="control-label" for="post_res_vasc_pulm">Res. vasc.r pulmonar</label>
          <div class="controls"><input type="text" id="post_res_vasc_pulm" placeholder="RVP" class="span2">
            <select id="post_res_vasc_pulm_unit" class="span2">
              <option>dinas</option>
              <option>woods</option>
            </select>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_res_vasc_syst">Res. vasc. sist</label>
          <div class="controls"><input type="text" id="post_res_vasc_syst" placeholder="RVS" class="span2">
            <select id="post_res_vasc_syst_unit" class="span2">
              <option>dinas</option>
              <option>woods</option>
            </select>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_pap_sys">Pres. Arterial <b>Pulmonar</b></label>
          <div class="controls"><input type="text" id="post_pap_sys" placeholder="sistólica" class="span1">
            <input type="text" id="post_pap_dias" placeholder="diastólica" class="span1">
            <b><span id="post_pam_pulm"></span></b>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_pas_sys">Pres. Arterial <b>Sistémica</b></label>
          <div class="controls">
            <input type="text" id="post_pas_sys" placeholder="sistólica" class="span1">
            <input type="text" id="post_pas_dias" placeholder="diastólica" class="span1">
            <b><span id="post_pam_stm"></span></b>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_rt_atr_press">Pres. aurícula derecha</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_rt_atr_press" placeholder="PAD" class="span2">
              <span class="add-on">mmHg</span>
            </div>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_pulm_wedg_press">Pres. cuña pulmonar</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_pulm_wedg_press" placeholder="PCP" class="span2">
              <span class="add-on">mmHg</span>
            </div>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_pulm_gradient">Gradiente transpulmonar</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_pulm_gradient" placeholder="GTP" class="span2" disabled>
              <span class="add-on">mmHg</span>
            </div>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_cardiac_outp">Gasto cardiaco</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_cardiac_outp" placeholder="CO -L/min" class="span2">
              <span class="add-on">Lt/min</span>
            </div>
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_cardiac_index">Índice cardiaco</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_cardiac_index" placeholder="L/min/Mt2" class="span2" disabled>
              <span class="add-on">Lt/min/Mt2</span>
            </div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="post_rt_atr_oxim">Oximetría AD/VD/AP %</label>
          <div class="controls">
            <input type="text" id="post_rt_atr_oxim" placeholder="aur. derecha" class="span2">
            <input type="text" id="post_rt_ventr_oxim" placeholder="vent. derecho" class="span2">
            <input type="text" id="post_pulm_artery" placeholder="art. pulmonar" class="span2">
          </div>
        </div>
        <div class="control-group"><label class="control-label" for="post_heart_rate">Frecuencia cardiaca</label>
          <div class="controls">
            <div class="input-append">
              <input type="text" id="post_heart_rate" placeholder="pulso" class="span2">
              <span class="add-on">lat/min</span>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="span2" style="text-align:right">RESULTADO</div>
        <div class="span4" id="reactivity">No se hizo test</div>
      </div><br>
      <div class="row">
        <div class="span6">
          <button class="btn span6">GRABAR</button>
        </div>
      </div><br><br>
      <!--end of "drugdependant" -->
    </div>
  </div>
</div>
<!--end of main content-->
















<!--main content here-->
<div class="container">
  <div class="row">

    <div class="span3" style="margin-top: 0px;">
      <? include '../includes/left_menu.php'; ?>

      <div style="margin-left: 13px;">
        <h3 id="left_title">Evaluaci&oacute;n<br>cl&iacute;nica</h3>
        <a class="btn span2" id="sel_anam">Anamnesis</a>
        <a class="btn span2" id="sel_ex_fc">Examen f&iacute;sico</a>
        <a class="btn span2" id="sel_hiperclot">Hipercoagulabilidad</a>
        <a class="btn span2" id="sel_treatment">Tratamiento</a>
        <a class="btn span2" id="sel_outcome">Fallecido?</a>
      </div>

    </div>

    <div class="span9" style="margin-top: 40px;">

      <div class="row">
        <? include '../includes/info.php'; ?>
      </div><br>

      <!-- anamnesis begin -->
      <? include '../patient/basic/anamnesis.php'; ?>
      <!-- anamnesis end -->

      <!-- examen fisico begin -->
      <? include '../patient/basic/ex_fc.php'; ?>
      <!-- examen fisico end -->

      <!-- hipercoagulabilidad begin -->
      <? include '../patient/basic/hiperclot.php'; ?>
      <!-- hipercoagulabilidad end -->

      <!-- tratamiento begin -->
      <? include '../patient/basic/treatment.php'; ?>
      <!-- tratamiento end -->

      <!-- fallecido begin -->
      <? include '../patient/basic/outcome.php'; ?>
      <!-- fallecido end -->

    </div>

  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/clinic_eval.js"></script>