  <body>
    <div id="wrap">
        <div>
            <!--header starts here-->
            <div class="container" style="background:#3A3A3A;color:#fff;padding:10px">
                <div class="row">
                    <div class="span2" style="color:gray"><b>HIAPULCO</b></div>
                    <div class="span5">
                        <div class="btn-group">
                    <button class="btn btn-inverse">Inicio <img id="header_lung" src="http://www.healmydisease.com/13hiapulco/images/whitelogo%20trpHIAP.gif" /></button>
                    <a class="btn btn-inverse ">Mi perfil <i class="icon-edit icon-white"></i></a>
                <a class="btn  btn-inverse ">Editar paciente <i class="icon-user icon-white"></i></a>
                    <a class="btn  btn-inverse">Salir <i class="icon-share-alt icon-white"></i></a>
                </div>
                    </div>
                    <div class="span5" style="color:gray">Dr. HECTOR ORTEGA</div>
                </div>
            </div>
            <!--header ending-->
            
            <!--main content here-->
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="btn-group">
                            <a class="btn" id="basic_eval" rel="tooltip" title="Evaluación clínica">
                                <img width="26px" height="22px" src="http://www.healmydisease.com/13hiapulco/images/basic_evaluation.gif"/>
                            </a>
                            <a class="btn" id="blood_test" rel="tooltip" title="Pruebas en sangre" href="http://jsfiddle.net/joaleto/5fNdg/embedded/result/" target="_blank">
                                <img width="26px" height="22px"  src="http://www.healmydisease.com/13hiapulco/images/bloodtest.gif"/>
                            </a>
                            <a href="http://jsfiddle.net/joaleto/bbUJS/embedded/result/" class="btn" id="clin_images" rel="tooltip" title="Imágenes diagnósticas">
                                <img width="26px" height="22px"  src="http://www.healmydisease.com/13hiapulco/images/clinical_imaging.gif"/>
                            </a>
                            <a href="http://jsfiddle.net/joaleto/DTg2S/embedded/result/" class="btn" id="performance" rel="tooltip" title="Desempeño cardiovascular">
                                <img width="26px" height="22px"  src="http://www.healmydisease.com/13hiapulco/images/performance.gif"/>
                            </a>
                        </div><!-- end of menugroup-->
                        <br><br>
                        <div class="main_icon">
                        </div>
                        <div>
                            <h3>Ev. clínica</h3>
                            <a class="btn span2" id="sel_anam">Anamnesis</a>
                            <a class="btn span2" id="sel_ex_fc">Examen físico</a>
                            <a class="btn span2" id="sel_hiperclot">Hipercoagulabilidad</a>
                            <a class="btn span2" id="sel_treatment">Tratamiento</a>
                            <a class="btn span2" id="sel_outcome">Fallecido?</a>
                        </div>
                    </div>
                    <div class="span9"><br><br><br>
                        <div class="row">
                            <div class="span1">
                                <img src="http://www.healmydisease.com/13hiapulco/images/male.png"/>
                            </div>
                            <div class="span8">
                                <b>JORMAN BUSTAMANTE</b> <br>documento CC1234567
                    <p>86 años</p>
                            </div>
                        </div>
                        <div id="anam">
                            <div class="row">
                                <div CLASS="well well-small span8">
                                    <h4>ANAMNESIS</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Fecha inicio síntomas</div>
                                <div class="span2">
                                    <input type="text" id="year" placeholder="año" class="span1"/>
                                    <input type="text" id="month" placeholder="mes" class="span1"/>
                                </div>
                                <div class="span2" style="text-align:right">Raza afroamericana?</div>
                                <div class="span2">
                                    <select class="span2">
                                        <option value=""></option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select></div>
                            </div>
                            <div class="row">
                                <div class="span4">Actualmente en embarazo? (desactivar si gender!=female)</div>
                                <div class="span2">
                                    <select class="span2" id="pregnant">
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
                                <div class="span2">FECHA EVALUACIÓN</div>
                                <div class="span3">
                                    <input type="text" id="year_ev" class="span1" placeholder="año"/>
                                    <input type="text" id="month_ev" class="span1" placeholder="mes"/>
                                    <input type="text" id="day_ev" class="span1" placeholder="día"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Oxígeno domiciliario?</div>
                                <div class="span2">
                                    <select id="homeoxigen" class="span2">
                                        <option value=""></option>
                                        <option value="si">si</option>
                                        <option value="">no</option>
                                    </select>
                                </div>
                                <div id="ox_depend">
                                    <div class="span2" style="text-align:right">Horas diarias oxígeno</div>
                                    <div class="span2">
                                        <select id="dailyhours_ox" class="span2">
                                            <option val=""></option>
                                            <option val="ls8">0 - 8 horas</option>
                                            <option val="bt8_16">8 - 16 horas</option>
                                            <option val="gr16">16 - 24 horas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Clase funcional</div>
                                <div class="span6">
                                    <select id="nyha_funct_class" class="span5">
                                        <option val=""></option>
                                        <option val="i">I. Asintomático</option>
                                        <option val="ii">II. Disnea que limita pocas actividades cotidianas</option>
                                        <option val="iii">III. Disnea incapacitante, cede solo al reposo</option>
                                        <option val="iv">IV. Disnea de reposo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8"><h4>SÍNTOMAS (de interés para HAP)</h4></div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Disnea <input type="checkbox" id="dyspnea"></div>
                                <div class="span2" style="text-align:right">Tos <input type="checkbox" id="cough"></div>
                                <div class="span2" style="text-align:right">Dolor torácico <input type="checkbox" id="chestpain"></div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Edema MsIs <input type="checkbox" id="loweredema"></div>
                                <div class="span2" style="text-align:right">Hemoptisis <input type="checkbox" id="hemoptysis"></div>
                                <div class="span2" style="text-align:right">Síncope <input type="checkbox" id="syncope"></div>
                            </div>
                            <div class="row">
                                <div class="span8"><br></div>
                            </div>
                            <div class="row">
                                <div class="offset1 span3" style="text-align:right">Síntomas han mejorado?</div>
                                <div class="span2">
                                    <select id="improved_symts" class="span2">
                                        <option value=""></option>
                                        <option value="si">si</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8"><br><br><a class="btn">GUARDAR</a><br><br></div>
                            </div>
                        </div>
                        <div id="ex_fc">                            
                            <div class="row">
                                <div CLASS="well well-small span8">
                                    <h4>EXAMEN FÍSICO</h4>
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
                                <div class="span8"><br><br><a class="btn">GUARDAR</a><br><br></div>
                            </div>
                        </div>
                
                        <div id="hiperclot">
                            <div class="row">
                                <div CLASS="well well-small span8">
                                    <h4>ESTADOS DE HIPERCOAGULABILIDAD</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span3" style="text-align:right">S. Antifosfolípido</div>
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
                                <div class="span3" style="text-align:right">Trombofilia no específica</div>
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
                                            <a rel="tooltip" title="agregar medicamento" id="ad_drug">
                                                Añadir
                                            </a>
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
                                        <input type="text" id="year_ini_d" class="span1" placeholder="año"/>
                                        <input type="text" id="month_ini_d" class="span1" placeholder="mes"/>
                                        <input type="text" id="day_ini_d" class="span1" placeholder="día"/>
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
                                        <input type="text" id="year_end_d" class="span1" placeholder="año"/>
                                        <input type="text" id="month_end_d" class="span1" placeholder="mes"/>
                                        <input type="text" id="day_end_d" class="span1" placeholder="día"/>
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
                                    <input type="text" id="year_transp" class="span1" placeholder="año"/>
                                    <input type="text" id="month_transp" class="span1" placeholder="mes"/>
                                    <input type="text" id="day_transp" class="span1" placeholder="día"/>
                                </div>
                                <div class="span1"></div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <h5>Trombendarterectomía y Atrioseptoplastia: marcar si se hicieron estas cirugías</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span3" style="text-align:right">Trombendarterectomía? <input type="checkbox" id="tendt"></div>
                                <div class="span3" id="tendt_hide">
                                    <input type="text" id="year_tendt" class="span1" placeholder="año"/>
                                    <input type="text" id="month_tendt" class="span1" placeholder="mes"/>
                                    <input type="text" id="day_tendt" class="span1" placeholder="día"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span3" style="text-align:right">Atrioseptostomía? <input type="checkbox" id="atr_sept"></div>
                                <div class="span3" id="atr_sept_hide">
                                    <input type="text" id="year_atr" class="span1" placeholder="año"/>
                                    <input type="text" id="month_atr" class="span1" placeholder="mes"/>
                                    <input type="text" id="day_atr" class="span1" placeholder="día"/>
                                </div>
                                <div class="span1"></div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <hr>
                                    <a class="btn" class="span3">Manejo quirúrgico guardar</a>
                                    <br><br>
                                </div>
                            </div>
                        </div>
            
                        <div id="outcome">
                            <div class="row">
                                <div CLASS="well well-small span8">
                                    <h4>DATOS ASOCIADOS A MUERTE</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">Diligenciar en caso de paciente fallecido
                                </div>
                            </div>
                            <div class="row">
                                <div class="span2" style="text-align:right">Fecha del deceso</div>
                                <div class="span3">
                                    <input type="text" id="year_death" class="span1" placeholder="año"/>
                                    <input type="text" id="month_death" class="span1" placeholder="mes"/>
                                    <input type="text" id="day_death" class="span1" placeholder="día"/>
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
                                <div class="span8"><br><br><a class="btn">GUARDAR</a><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of main content-->
            
        <!-- header and content <div class=""></div> -->
      </div>
      <div id="push"></div>
    </div>
    <div id="footer" style="background:#3A3A3A;color:white">footer goes here.  Change according to desired info</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://www.healmydisease.com/12bootstrap/js/bootstrap.min.js"></script>
    <script src="http://www.healmydisease.com/12bootstrap/js/bootstrap-carousel.js"></script>
      <script src="http://www.healmydisease.com/12bootstrap/js/bootstrap-modal.js"></script>
      <script src="http://www.healmydisease.com/01prim/medic.js"></script>
</body>
</html>​