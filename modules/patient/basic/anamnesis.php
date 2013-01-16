<div id="anam" style="padding-left: 40px;">
  <div class="row">
    <div CLASS="well well-small span8">
      <h4>ANAMNESIS</h4>
    </div>
  </div>
  
  <div class="row">
    <div class="span2" style="text-align:right">Fecha inicio s&iacute;ntomas</div>
    
    <div class="span2" style="text-align: left;">
      <input type="text" id="year" placeholder="a&ntilde;o" class="span1"/>
      <input type="text" id="month" placeholder="mes" class="span1"/>
    </div>
    
    <div class="span2" style="text-align:left">Raza afroamericana?</div>
    
    <div class="span2">
      <select class="span2">
        <option value=""></option>
        <option value="si">Si</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
    
  <div class="row">
    <div class="span4">  </div>
    <div class="span2">
      <select class="span2 anamnesis" id="pregnant" style="display:none">
        <option value=""></option>
        <option value="si">Si</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
    
  <div class="row">
    <div class="span8"><hr></div>
  </div>
    
  <div class="row">
    <div class="span2">FECHA EVALUACI&Oacute;N</div>
    <div class="span3" style="text-align: left;">
      <input type="text" id="year_ev" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="month_ev" class="span1" placeholder="mes"/>
      <input type="text" id="day_ev" class="span1" placeholder="d&iacute;a"/>
    </div>
  </div>

  <div class="row">
    <div class="span2" style="text-align:right">Ox&iacute;geno domiciliario?</div>
    <div class="span2">
      <select id="homeoxigen" class="span2 anamnesis">
        <option value=""></option>
        <option value="si">si</option>
        <option value="">no</option>
      </select>
    </div>
    
    <div id="ox_depend">
      <div class="span2" style="text-align:right">Horas diarias ox&iacute;geno</div>
      <div class="span2">
        <select id="dailyhours_ox" class="span2 anamnesis">
          <option val=""></option>
          <option val="ls8">0 - 8 horas</option>
          <option val="bt8_16">8 - 16 horas</option>
          <option val="gr16">16 - 24 horas</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span2" style="text-align:left">Clase funcional</div>
    <div class="span6" style="text-align: left; ">
      <select id="nyha_funct_class" class="span5 anamnesis">
        <option val=""></option>
        <option val="i">I. Asintom&acute;tico</option>
        <option val="ii">II. Disnea que limita pocas actividades cotidianas</option>
        <option val="iii">III. Disnea incapacitante, cede solo al reposo</option>
        <option val="iv">IV. Disnea de reposo</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="span8" style="text-align: left;"><h4>S&iacute;NTOMAS (de inter&eacute;s para HAP)</h4></div>
  </div>
    
  <div class="row">
    
    <div class="span2" style="text-align:right">
      Disnea 
      <input type="checkbox" id="dyspnea" class="anamnesis">
    </div>
    
    <div class="span2" style="text-align:right">
      Tos 
      <input type="checkbox" id="cough" class="anamnesis">
    </div>
    
    <div class="span2" style="text-align:right">
      Dolor torácico 
      <input type="checkbox" id="chestpain" class="anamnesis">
    </div>
  </div>
  
  <div class="row">
    <div class="span2" style="text-align:right">
      Edema MsIs 
      <input type="checkbox" id="loweredema" class="anamnesis">
    </div>
    
    <div class="span2" style="text-align:right">
      Hemoptisis 
      <input type="checkbox" id="hemoptysis" class="anamnesis">
    </div>
    
    <div class="span2" style="text-align:right">
      S&iacute;ncope 
      <input type="checkbox" id="syncope" class="anamnesis">
    </div>
  </div>
  
  <div class="row">
    <div class="span8"><br></div>
  </div>
  
  <div class="row">
    <div class="offset1 span3" style="text-align:right">S&iacute;ntomas han mejorado?</div>
    <div class="span2">
      <select id="improved_symts" class="span2 anamnesis">
        <option value=""></option>
        <option value="si">si</option>
        <option value="no">no</option>
      </select>
    </div>
  </div>
    
  <div class="row">
    <div class="span8" style="text-align: left;">
      <br><br>
      <a class="btn" id="sympt_save">GUARDAR</a>
      <br><br>
    </div>
  </div>
</div>