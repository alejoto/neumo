<div id="outcome">
  <div class="row">
    <div CLASS="well well-small span8">
      <h4>DATOS ASOCIADOS A MUERTE</h4>
    </div>
  </div>
  
  <div class="row">
    <div class="span8">Diligenciar en caso de paciente fallecido</div>
  </div>
  
  <div class="row">
    <div class="span2" style="text-align:right">Fecha del deceso</div>
    <div class="span3">
      <input type="text" id="year_death" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="month_death" class="span1" placeholder="mes"/>
      <input type="text" id="day_death" class="span1" placeholder="d&iacute;a"/>
    </div>
  </div>
    
  <div class="row">
    <div class="span2" style="text-align:right">Muerte por HAP?</div>
    <div class="span5">
      <select id="dead_cause" class="span5 outcome">
        <option></option>
        <option value="si_dom">Muerte s&uacute;bita en domicilio</option>
        <option value="si_hosp">Muerte en hospital por complicaci&oacute;n HAP</option>
        <option value="no">Muerte no asociada a HAP (ej. c&aacute;ncer, accidente de tr&aacute;nsito)</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="span8"><br><br><a class="btn" id="outcome_save">GUARDAR</a><br><br></div>
  </div>
</div>