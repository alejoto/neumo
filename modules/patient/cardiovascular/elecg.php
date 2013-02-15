<div id="elecg">
  <div class="row">
    <div class="span8 well well-small"><h4>ELECTROCARDIOGRAMA</h4></div>
  </div>
  <div class="row">
    <div class="span2">Fecha realizaci&oacute;n</div>
    <div class="span3">
      <input type="text" id="y_ecg" name="ecg_date" class="span1 ecg date1" placeholder="a&ntilde;o"/>
      <input type="text" id="m_ecg" class="span1 ecg date1" placeholder="mes"/>
      <input type="text" id="d_ecg" class="span1 ecg date1" placeholder="d&iacute;a"/>
    </div>
  </div>
  <div class="row">
    <div class="span2">
      <select id="axis" name="axis" class="span2 ecg" >
        <option valule="">Eje...</option>
        <option valule="normal">Eje normal</option>
        <option valule="right">Eje derecho</option>
        <option valule="left">Eje izq.</option>
        <option valule="nobody">Tierra de nadie</option>
      </select>
    </div>
    <div class="span3">
      <select class="span3 ecg" id="rythm" name="rythm">
        <option valule="">Ritmo...</option>
        <option valule="sinusal">Sinusal</option>
        <option valule="supravent">R&iacute;tmico supravent</option>
        <option valule="ventr_or_BBB">R&iacute;tmico ventr o bloqueo rama</option>
        <option valule="atr_fibrl">Fibrilaci&oacute;n auricular</option>
        <option valule="other_rythm">Otra arritmia no mencionada</option>
      </select>
    </div>
    <div class="span2">
      <input type="text" placeholder="frec."class="span1 ecg" id="frq" name="frq">/min
    </div>
  </div>
  <div class="row">
    <div class="span8"><hr></div>
  </div>
  <div class="row">
    <div class="span8">PATRONES ANORMALES TRAZO EL&Eacute;CTRICO (de inter&eacute;s para hipertensi&oacute;n pulmonar)</div>
  </div>
  <div class="row">
    <div class="span4">
      <select class="span4 ecg" id="pattern" name="pattern">
        <option value=""></option>
        <option value="Ninguno">Ninguno</option>
        <option value="SIQIIITIII">SI-QIII-TIII</option>
        <option value="BRDHH">Bloqueo de Rama derecha Haz de His</option>
        <option value="both">Ambos (SIQIIITIII y BRDHH)</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8">
	<a class="btn" id="save_ecg" name="ecg_save">Guardar</a>
    </div>
  </div>
</div>
