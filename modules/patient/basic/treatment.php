
<div id="treatment">
  <div class="row">
    <div CLASS="well well-small span8">
      <h4>TRATAMIENTO</h4>
    </div>
  </div>

  <div class="row">
    <?php 
    include '../patient/basic/table_treatment.php';
    ?>
    <div class="span3" id='table_drug_result'></div>
  </div>
  <div class="row" style='display:none' id='drug_already_exist'>
    <div class="span4 alert" >Medicamento ya existe. Confirmar ingreso</div>
    <div class='span1'>
      <a class='btn span1' id='reconfirm_drugsave' href="#">Ingresar</a>
    </div>
    <div class='offset1 span1'>
      <a class='btn  span1' href="#" id='cancel_duplicated_drug'>Cancelar</a>
    </div>
  </div>

  <div id="inputdrug">
    <div class="row">
      <div class="span3">
        <select id="drug" class="treatment span3" >
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
          <option value="warfarina">Warfarina</option>
          <option value="diltiazem">Diltiazem</option>
          <option value="nifedipina">Nifedipina</option>
          <option value="amlodipino">Amlodipino</option>
          <option value="hbpm">Heparinas BPM</option>
        </select>
      </div>
      <div class="span1" style="text-align:right">Inicio</div>
      <div class="span1">
        <input type="text" id="year_ini_d" class="span1" placeholder="a&ntilde;o"/>
      </div>
      <div class="span1">
        <input type="text" id="month_ini_d" class="span1" placeholder="mes"/>
      </div>
      <div class="span1">
        <input type="text" id="day_ini_d" class="span1" placeholder="d&iacute;a"/>
      </div>
    </div>

      <!--
      <div class="row">
        <div class="span8">
          <textarea class="span8 treatment" rows="3" id="drug_adv_event">Describir evento adverso
          </textarea>
        </div>
      </div> -->

    <div class="row">
      <div class="span1">
        <a id="btn_add_drug" class="btn btn-primary span1">Agregar</a>
      </div>
      <div class="offset1 span1">
        <a id='hide_drug_hap' class="btn btn-info span1">Cancelar</a>
      </div>
    </div>
  </div>

  <div id="hap_suspend" style="display:none">
    <div class="row">
      <div class="span3">
        <select id="suspend_cause" class="treatment" >
          <option value="">...Motivo suspensi&oacute;n tto</option>
          <option value="">No ha habido suspensi&oacute;n</option>
          <option value="Evento adverso">Evento adverso</option>
          <option value="No adherencia al tto">Desersi&oacute;n al tto</option>
          <option value="Negacion EPS">Negaci&oacute;n por asegurador</option>
          <option value="Negacion EPS">Mejor&oacute; con otro tto</option>
          <option value="Negacion EPS">Paciente fallecido</option>
          <option value="Otras">Otras causas</option>
        </select>
      </div>
      <div class="span1" style="text-align:right">Suspensi&oacute;n</div>
      <div class="span3">
        <input type="text" id="year_end_d" class="span1" placeholder="a&ntilde;o"/>
        <input type="text" id="month_end_d" class="span1" placeholder="mes"/>
        <input type="text" id="day_end_d" class="span1" placeholder="d&iacute;a"/>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span8"><hr><h4>MANEJO QUIR&Uacute;RGICO</h4></div>
  </div>

  <div class="row">
    <div class="span8" style="text-align:left">
      Dejar sin responder si no aplica.
    </div>
  </div>

  <div class="row">
    <div class="span3">
      <select id="transplant" class="treatment">
        <option value="">Tipo de transplante</option>
        <option value="en espera">En lista de espera</option>
        <option value="pulmon">Transplantado: pulm&oacute;n</option>
        <option value="corazon pulmon">Transplantado: coraz&oacute;n-pulm&oacute;n</option>
      </select>
    </div>

    <div class="span3">
      <input type="text" id="year_transp" class="span1 surgical date1" name="surgical_date" placeholder="a&ntilde;o"/>
      <input type="text" id="month_transp" class="span1 surgical" placeholder="mes"/>
      <input type="text" id="day_transp" class="span1 surgical" placeholder="d&iacute;a"/>
    </div>
    <div class="span1"></div>
  </div>

  <div class="row" id="id1">
    <div class="span3" id="id2" style="text-align:right">Trombendarterectom&iacute;a? 
      <input type="checkbox" id="tendt" class="treatment" >
    </div>
    <div class="span3" id="tendt_hide">
      <input type="text" id="year_tendt" class="span1 surgical date1" name="surgical_tendt_date" placeholder="a&ntilde;o"/>
      <input type="text" id="month_tendt" class="span1 surgical" placeholder="mes"/>
      <input type="text" id="day_tendt" class="span1 surgical" placeholder="d&iacute;a"/>
    </div>
  </div>

  <div class="row">
    <div class="span3" style="text-align:right">Atrioseptostom&iacute;a? 
      <input type="checkbox" id="atr_sept" class="treatment" onchange=show_on_check(this)>
    </div>
    <div class="span3" id="atr_sept_hide">
      <input type="text" id="year_atr" class="span1 surgical date1" name="surgical_atr_date" placeholder="a&ntilde;o"/>
      <input type="text" id="month_atr" class="span1 surgical" placeholder="mes"/>
      <input type="text" id="day_atr" class="span1 surgical" placeholder="d&iacute;a"/>
    </div>
    <div class="span1"></div>
  </div>

  <div class="row">
    <div class="span8">
      <hr/>
      <a class="btn class3" id="treatment_save">Guardar</a>
      <br><br>
    </div>
  </div>
</div>
