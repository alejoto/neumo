<div id="ecocardio">
     <div class="row">
         <div class="span8 well well-small">ECOCARDIOGRAF&Iacute;A</div>
     </div>
     <div class="row">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_ecoc" class="span1" placeholder="a&ntilde;o"/>
             <input type="text" id="m_ecoc" class="span1" placeholder="mes"/>
             <input type="text" id="d_ecoc" class="span1" placeholder="d&iacute;a"/>
         </div>
         <div class="span2" style="text-align:right">V&iacute;a transductor</div>
         <div class="span2">
             <select id="doppl_type" class="span2">
                 <option value="">...</option>
                 <option value="tt">Transtor&aacute;cico</option>
                 <option value="te">Transesof&aacute;gico</option>>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span3" style="text-align:right">Presi&oacute;n sist&oacute;lica arteria pulmonar</div>
         <div class="span1">
             <div class="input-append">
                 <input type="text" id="doppl_syst_press" class="span1" placeholder="mmHg"/>
                 <span class="add-on">mmHg</span>
             </div>
         </div>
         <div class="span2" style="text-align:right">Frc. eyec. VI</div>
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="eject_fract" class="span1" placeholder="FEVI"/>
                 <span class="add-on">%</span>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="span3" style="text-align:right">Tricuspid a. p. syst. excursion</div>
         <!-- -->
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="tapse" class="span1" placeholder="TAPSE"/>
                 <span class="add-on">cm</span>
             </div>
         </div>
         <div class="span4"></div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8"><b>Marcar hallazgos presesntes</b></div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_right_dilat">Dilataci&oacute;n VD
         </div>
         <div class="span3">
             <input type="checkbox" id="doppl_right_dysf">Disfunci&oacute;n VD
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_pleur_effuss">Derrame peric&aacute;rdico
         </div>
         <div class="span3">
             <input type="checkbox" id="left_heart_dysf">Disfunci&oacute;n VI
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_septum_dev">Septum desviado
         </div>
     </div>
     <div class="row">
         <div class="span8">
             <br>
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <select id="doppl_cong_defects" class="span3">
                 <option value="">DEFECTOS CARDIACOS...</option>
                 <option value="no">No evidencia</option>
                 <option value="cia">CIA</option>
                 <option value="civ">CIV</option>
                 <option value="paradox_septum">Movimiento parad&iacute;jido septum</option>
                 <option value="paradox_septum">Foramen oval permeable</option>
                 <option value="other">Otros</option>
             </select>
         </div>
         <div class="span3" id="other_defects2">
             <input type="text" id="doppl_cong_defects_otros" class="span3" placeholder="Otros defectos cardiacos"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8"><a class="btn" id="ecoc_save">Guardar</a></div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
 </div>