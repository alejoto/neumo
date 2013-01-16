<div id="tc_angio">
     <div class="row">
         <div class="span8 well well-small">TOMOGRAFÍA PULMONAR</div>
     </div>
     <div class="row">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_tc" class="span1" placeholder="a&ntilde;o"/>
             <input type="text" id="m_tc" class="span1" placeholder="mes"/>
             <input type="text" id="d_tc" class="span1" placeholder="día"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><b>Diámetros arterias pulmonares (en milímetros)</b></div>
     </div>
     <div class="row">
         <div class="span1" style="text-align:right">Tronco</div>
         <div class="span1">
             <input type="text" id="a_tc_main_pulm_art_diamt" class="span1" placeholder="mm"/>
         </div>
         <div class="span1" style="text-align:right">Derecha</div>
         <div class="span1">
             <input type="text" id="a_tc_rt_pulm_art_diamt" class="span1" placeholder="mm"/>
         </div>
         <div class="span1" style="text-align:right">Izquierda</div>
         <div class="span1">
             <input type="text" id="a_tc_left_pulm_art_diamt" class="span1" placeholder="mm"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8"><b>marcar hallazgos presentes</b></div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="a_tc_rt_heart_dilat">Dilatación cavidades derechas
         </div>
         <div class="span3">
             <input type="checkbox" id="a_tc_pulm_thrombos">Presencia de trombos
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="a_tc_inft_interst">Inflitrados intersticiales
         </div>
         <div class="span3">
             <input type="checkbox" id="a_tc_inft_alv">Infiltrados alveolares
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="a_tc_inft_nodular">Infiltrados nodulares
         </div>
         <div class="span3">
             <input type="checkbox" id="a_tc_inft_retic">Infiltrados reticulares
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="a_tc_inft_honeycomb">Imagen en panal de abeja
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span3">
             <select id="a_tc_tep_pattern" class="span3">
                 <option value="">TROMBOEMBOLISMO?...</option>
                 <option value="no">sin signos</option>
                 <option value="central">central</option>
                 <option value="periférico">periférico</option>
                 <option value="mosaico">mosaico</option>
             </select>
         </div>
         <div class="span3">
             <select id="a_tc_congenit" class="span3">
                 <option value="">DEFECTOS CARDIACOS...</option>
                 <option value="no">sin defectos</option>
                 <option value="cia">CIA</option>
                 <option value="civ">CIV</option>
                 <option value="paradox_septum">movimiento paradójido septum</option>
                 <option value="paradox_septum">foramen oval permeable</option>
                 <option value="other">otros</option>
             </select>
         </div>
     </div>
     <div class="row" id="other_defects1">
         <div class="offset3 span3">
             <input type="text" id="a_tc_congenit_otros" class="span3" placeholder="Describir defectos cardiacos"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8"><a class="btn" id="tc_save">Guardar</a></div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
 </div>
