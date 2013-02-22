<div id="anam" style="padding-left: 40px;">
  <div class="row">
    <div CLASS="well well-small span8">
      <h4>ANAMNESIS</h4>
    </div>
  </div>
  <div class="row">
    <div class="span7 text-info" style="text-align:left">
      <b>SOBRE INICIO DE LA ENFERMEDAD ...</b>
    </div>
  </div>
  <?php  include 'first_eval.php'; ?>
  <div class="row">
    <div class="span4">  </div>
    <div class="span2">
      <select class="span2" id="pregnant" style="display:none">
        <option value=""></option>
        <option value="si">S&iacute;</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8"><hr></div>
  </div>
  <div class="row">
    <div class="span7 text-info" style="text-align:left">
      <h4>EVALUACI&Oacute;N DE SEGUIMIENTO</h4><br/>
    </div>
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
    <div class="span2" style="text-align:left">Clase funcional</div>
    <div class="span6" style="text-align: left; ">
      <select id="nyha_funct" class="span5">
        <option value=""></option>
        <option value="i">I. Asintom&aacute;tico</option>
        <option value="ii">II. Disnea que limita pocas actividades cotidianas</option>
        <option value="iii">III. Disnea incapacitante, cede solo al reposo</option>
        <option value="iv">IV. Disnea de reposo</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8" style="text-align: left;"><h4>S&iacute;ntomas de inter&eacute;s para HAP</h4></div>
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
      Dolor tor&aacute;cico 
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
      <select id="improved_symts" class="span2">
        <option value=""></option>
        <option value="si">S&iacute;</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8" style="text-align: left;">
      <br><br>
      <a class="btn" id="sympt_save2">Continuar..</a>
      <br><br>
    </div>
  </div>
  <div id='anam_result'></div>
</div>
