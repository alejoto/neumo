<div id="x_ray">
     <div class="row">
         <div class="span8 well well-small">RAYOS X</div>
     </div>
     <div class="row">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_xray" class="span1" placeholder="a&ntilde;o"/>
             <input type="text" id="m_xray" class="span1" placeholder="mes"/>
             <input type="text" id="d_xray" class="span1" placeholder="día"/>
         </div>
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="cardiothrx_index" class="span2" placeholder="Índ. cardiotorácico"/>
                 <span class="add-on">I.CT</span>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="span2">Infiltrados</div>
         <div class="span2">Áreas hipoperfusión</div>
         <div class="span3">Cardiomegalia derecha</div>
     </div>
     <div class="row">
         <div class="span2">
             <select id="alveolar_infiltrates" class="span2">
                 <option value=""></option>
                 <option value="none">ninguno</option>
                 <option value="focal">focal</option>
                 <option value="lobar">lobar</option>
                 <option value="multifocal">multifocal</option>
                 <option value="multilobar">multilobar</option>
                 <option value="difuso">difuso</option>
             </select>
         </div>
         <div class="span2">
             <select id="hypoperfusion_areas" class="span2">
                 <option value=""></option>
                 <option value="none">ninguno</option>
                 <option value="focal">focal</option>
                 <option value="lobar">lobar</option>
                 <option value="multifocal">multifocal</option>
                 <option value="multilobar">multilobar</option>
                 <option value="difuso">difuso</option>
             </select>
         </div>
         <div class="span2">
             <select id="right_heart_cardiomegs" class="span2">
                 <option value=""></option>
                 <option value="presente">presente</option>
                 <option value="ausente">ausente</option>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8">Marcar hallazgos presesntes</div>
     </div>
     <div class="row">
         <div class="span2">
             <input type="checkbox" id="pleur_effuss">Derrame pleural
         </div>
         <div class="span2">
             <input type="checkbox" id="b_kerkey_lines">Línes B de kerley
         </div>
         <div class="span3">
             <input type="checkbox" id="pulm_cone_evertion">Eversión cono pulmonar
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8"><a class="btn" id="xray_save">Guardar</a></div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
 </div>
