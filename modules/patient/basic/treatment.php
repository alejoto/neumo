
<div id="treatment">
  <div class="row">
    <div CLASS="well well-small span8">
      <h4>TRATAMIENTO</h4>
    </div>
  </div>

  <div class="row">
    <table class="table table-hover span8">
      <tr class="span8">
        <th class="span3">Fármaco</th>
        <th class="span2">Fecha inicio</th>
        <th class="span2">Fecha susp</th>
        <th class="span2">Motivo susp</th>
      </tr>
      <tr class="span8">
        <td class="span3"><a rel="tooltip" title="editar">Iloprost</a></td>
        <td class="span2">2012-10-10</td>
        <td class="span2">2012-11-30</td>
        <td class="span2">Alergia</td>
      </tr>
      <tr class="span8">
        <td class="span3"><a rel="tooltip" title="editar">Sidenalfil</a></td>
        <td class="span2">2012-10-10</td>
        <td class="span2"></td>
        <td class="span2"></td>
      </tr>
      <tr class="span8">
        <td class="span3"><a rel="tooltip" title="editar">Calcioantagonista</a></td>
        <td class="span2">2012-10-10</td>
        <td class="span2">2012-11-30</td>
        <td class="span2">Alergia</td>
      </tr>
      <tr class="span8">
        <td class="span3">
          <a rel="tooltip" title="agregar medicamento" id="ad_drug">A&ntilde;adir</a>
        </td>
        <td class="span2"></td>
        <td class="span2"></td>
        <td class="span2"></td>
      </tr>
    </table>
  </div>

  <div id="inputdrug">
    <div class="row">
      <div class="span3">
        <select id="drug" class="treatment" >
          <option value="">...Escoger medicamento</option>
          <option value="Epoprostenol">Epoprostenol</option>
          <option value="Treprostinil">Treprostinil</option>
          <option value="Tadalafil">Tadalafil</option>
          <option value="Sildenafil">Sildenafil</option>
          <option value="Iloprost">Iloprost</option>
          <option value="Bosentan">Bosentan</option>
          <option value="Ambrisentan">Ambrisentan</option>
          <option value="Riociguat">Riociguat</option>
          <option value="Furosemida">Furosemida</option>
          <option value="Digoxina">Digoxina</option>
          <option value="warfarina">warfarina</option>
          <option value="diltiazem">diltiazem</option>
          <option value="nifedipina">nifedipina</option>
          <option value="amlodipino">amlodipino</option>
          <option value="hbpm">heparinas BPM</option>
        </select>
      </div>
      <div class="span1" style="text-align:right">Inicio</div>
      <div class="span3">
        <input type="text" id="year_ini_d" class="span1" placeholder="a&ntilde;o"/>
        <input type="text" id="month_ini_d" class="span1" placeholder="mes"/>
        <input type="text" id="day_ini_d" class="span1" placeholder="d&iacute;a"/>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <select id="suspend_cause" class="treatment" >
          <option value="">...Motivo suspensión tto</option>
          <option value="">No ha habido suspensión</option>
          <option value="Evento adverso">Evento adverso</option>
          <option value="No adherencia al tto">Desersión al tto</option>
          <option value="Negación EPS">Negación por asegurador</option>
          <option value="Negación EPS">Mejoró con otro tto</option>
          <option value="Negación EPS">Paciente fallecido</option>
          <option value="Otras">Otras causas</option>
        </select>
      </div>
      <div class="span1" style="text-align:right">Suspensión</div>
      <div class="span3">
        <input type="text" id="year_end_d" class="span1" placeholder="a&ntilde;o"/>
        <input type="text" id="month_end_d" class="span1" placeholder="mes"/>
        <input type="text" id="day_end_d" class="span1" placeholder="d&iacute;a"/>
      </div>
    </div>

    <div class="row">
      <div class="span8">
        <textarea class="span8 treatment" rows="3" id="drug_adv_event" >Describir evento adverso:
        </textarea>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <a class="btn">Agregar</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span8"><hr><h4>MANEJO QUIRÚRGICO</h4></div>
  </div>

  <div class="row">
    <div class="span8">
      <h5>Transplante: diligenciar si paciente fue transplantado o está en lista de espera</h5>
    </div>
  </div>

  <div class="row">
    <div class="span3">
      <select id="transplant" class="treatment">
        <option value="">...Tipo de transplante</option>
        <option value="en espera">En lista de espera</option>
        <option value="pulmon">Transplantado: pulmón</option>
        <option value="corazon pulmon">Transplantado: corazón-pulmón</option>
      </select>
    </div>

    <div class="span3">
      <input type="text" id="year_transp" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="month_transp" class="span1" placeholder="mes"/>
      <input type="text" id="day_transp" class="span1" placeholder="d&iacute;a"/>
    </div>
    <div class="span1"></div>
  </div>

  <div class="row">
    <div class="span8">
      <h5>Trombendarterectom&iacute;a y Atrioseptoplastia: marcar si se hicieron estas cirug&iacute;as</h5>
    </div>
  </div>

  <div class="row">
    <div class="span3" style="text-align:right">Trombendarterectom&iacute;a? 
      <input type="checkbox" id="tendt" class="treatment" >
    </div>
    <div class="span3" id="tendt_hide">
      <input type="text" id="year_tendt" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="month_tendt" class="span1" placeholder="mes"/>
      <input type="text" id="day_tendt" class="span1" placeholder="d&iacute;a"/>
    </div>
  </div>

  <div class="row">
    <div class="span3" style="text-align:right">Atrioseptostom&iacute;a? 
      <input type="checkbox" id="atr_sept" class="treatment">
    </div>
    <div class="span3" id="atr_sept_hide">
      <input type="text" id="year_atr" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="month_atr" class="span1" placeholder="mes"/>
      <input type="text" id="day_atr" class="span1" placeholder="d&iacute;a"/>
    </div>
    <div class="span1"></div>
  </div>

  <div class="row">
    <div class="span8">
      <hr/>
      <a class="btn class3" id="treatment_save">guardar</a>
      <br><br>
    </div>
  </div>
</div>
