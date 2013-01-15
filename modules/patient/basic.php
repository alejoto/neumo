<!--main content here-->
<div class="container">
  <div class="row">
    
    <div class="span3" style="margin-top: 0px;">
      <? include '../includes/left_menu.php'; ?>
    </div>
    
    <div class="span9" style="margin-top: 40px;">

      <div class="row">
        <? include '../includes/info.php'; ?>
      </div><br>

      <!-- anamnesis begin -->
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
      <!-- anamnesis end -->
      
      <!-- examen fisico begin -->
      <div id="ex_fc">
        
        <div class="row">
          <div CLASS="well well-small span8">
            <h4>EXAMEN F&iacute;SICO</h4>
          </div>
        </div>
        
        <div class="row">
          <div class="span1" style="text-align:right">Peso</div>
          <div class="span1">
            <input type="text" placeholder="Kgs" class="span1" id="weight"/>
          </div>
          <div class="span1" style="text-align:right">Talla</div>
          <div class="span1">
            <input type="text" placeholder="Mts" class="span1" id="height"/>
          </div>
          <div class="span2" style="text-align:right">S.C. Mt2</div>
          <div class="span2" id="bsa"></div>
        </div>
        
        <div class="row">
          <div class="span1" style="text-align:right">Pulso</div>
          <div class="span1">
            <input type="text" placeholder="lat/min" id="pulse" class="span1"/>
          </div>
          <div class="span1" style="text-align:right">Resp</div>
          <div class="span1">
            <input type="text" placeholder="resp/min" id="breathing" class="span1"/>
          </div>
          <div class="span2" style="text-align:right">Saturación O2</div>
          <div class="span1">
            <input type="text" placeholder="%" id="sat_ox" class="span1"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span1">Pr.Arterial</div>
          <div class="span1">
            <input type="text" placeholder="sistol." id="psist" class="span1">
          </div>
          <div class="span1">
            <input type="text" placeholder="diastol."id="pdiast" class="span1">
          </div>
          <b><div class="span2" id="ef_pam"></div></b>
        </div>
        
        <div class="row">
          <div class="span8"><hr></div>
        </div>
          
        <div class="row">
          <div class="span2" style="text-align:right">Ingurg. yugular 45°</div>
          <div class="span1">
            <input type="checkbox" id="ing_yu">
          </div>
          <div class="span2" style="text-align:right">Hepatomegalia</div>
          <div class="span1">
            <input type="checkbox" id="hepatomegaly">
          </div>
        </div>
        
        <div class="row">
          <div class="span2" style="text-align:right">Cianosis</div>
          <div class="span1">
            <input type="checkbox" id="cyanosis">
          </div>
          <div class="span2" style="text-align:right">Hipocratismo digital</div>
          <div class="span1">
            <input type="checkbox" id="finger_clubbing">
          </div>
        </div>
          
        <div class="row">
          <div class="span2" style="text-align:right">Edema</div>
          <div class="span1">
            <input type="checkbox" id="ef_edema">
          </div>
        </div>
        
        <div class="row">
          <div class="span8"><br><br><a class="btn" id="ef_save">GUARDAR</a><br><br></div>
        </div>
      </div>
      <!-- examen fisico end -->
      
      <!-- hipercoagulabilidad begin -->
      <div id="hiperclot">
        
        <div class="row">
          <div CLASS="well well-small span8">
            <h4>ESTADOS DE HIPERCOAGULABILIDAD</h4>
          </div>
        </div>
          
        <div class="row">
          <div class="span3" style="text-align:right">S. Antifosfol&iacute;pido</div>
          <div class="span1">
            <input type="checkbox" id="antiphs_syndr"/>
          </div>
          <div class="span3" style="text-align:right">Mut. gen prot. 20210</div>
          <div class="span1">
            <input type="checkbox" id="protr20210_mutation"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span3" style="text-align:right">Resist. Prot C act</div>
          <div class="span1">
            <input type="checkbox" id="c_protein_resist"/>
          </div>
          <div class="span3" style="text-align:right">Déficit antiT-III</div>
          <div class="span1">
            <input type="checkbox" id="antitrbiii_deficiency"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span3" style="text-align:right">Déficit Prot S</div>
          <div class="span1">
            <input type="checkbox" id="prot_s_deficiency"/>
          </div>
          <div class="span3" style="text-align:right">Déficit Prot C</div>
          <div class="span1">
            <input type="checkbox" id="prot_c_deficiency"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span3" style="text-align:right">Trombofilia no espec&iacute;fica</div>
          <div class="span1">
            <input type="checkbox" id="unspecific_tromboph"/>
          </div>
          <div class="span3" style="text-align:right">Hiperhomocisteinemia</div>
          <div class="span1">
            <input type="checkbox" id="hyperhomocist"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span3" style="text-align:right">Enf. neoplásica</div>
          <div class="span1">
            <input type="checkbox" id="neoplasia"/>
          </div>
          <div class="span3" style="text-align:right">Esplenectomizado</div>
          <div class="span1">
            <input type="checkbox" id="esplenectomy"/>
          </div>
        </div>
          
        <div class="row">
          <div class="span1" style="text-align:right">Otros trastornos</div>
          <div class="span7">
            <input type="text" id="other_hyperclott_disord" class="span7" placeholder="Solo trastornos asociados a hipercoagulabilidad"/>
          </div>
        </div>
          
        <div class="row">
          <div class="span8"><br><br><a class="btn">GUARDAR</a><br><br></div>
        </div>
      </div>
      <!-- hipercoagulabilidad end -->

      <!-- tratamiento begin -->
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
              <select id="drug">
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
              <select id="suspend_cause">
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
              <textarea class="span8" rows="3" id="drug_adv_event" >Describir evento adverso:
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
            <select id="transplant">
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
          <div class="span3" style="text-align:right">Trombendarterectom&iacute;a? <input type="checkbox" id="tendt"></div>
          <div class="span3" id="tendt_hide">
            <input type="text" id="year_tendt" class="span1" placeholder="a&ntilde;o"/>
            <input type="text" id="month_tendt" class="span1" placeholder="mes"/>
            <input type="text" id="day_tendt" class="span1" placeholder="d&iacute;a"/>
          </div>
        </div>
        
        <div class="row">
          <div class="span3" style="text-align:right">Atrioseptostom&iacute;a? <input type="checkbox" id="atr_sept"></div>
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
            <a class="btn" class="span3">guardar</a>
            <br><br>
          </div>
        </div>
      </div>
      <!-- tratamiento end -->

      <!-- fallecido begin -->
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
            <select id="dead_cause" class="span5">
              <option></option>
              <option value="si_dom">Muerte súbita en domicilio</option>
              <option value="si_hosp">Muerte en hospital por complicación HAP</option>
              <option value="no">Muerte no asociada a HAP (ej. cáncer, accidente de tránsito)</option>
            </select>
          </div>
        </div>
        
        <div class="row">
          <div class="span8"><br><br><a class="btn" id="dead_save">GUARDAR</a><br><br></div>
        </div>
      </div>
      <!-- fallecido end -->
      
    </div>
  
  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/clinic_eval.js"></script>