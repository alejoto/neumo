<div id="sixm_walk">
  <div class="row">
    <div class="span8 well well-small">
      <h4>TEST "CAMINATA DE 6 MINUTOS"</h4>
    </div>
  </div>
  <div class="row">
    <div class="span1" style="text-align:right">
      FECHA
    </div>
    <div class="span3">
      <input type="text" id="y_sixmw" class="span1" placeholder="a&ntilde;o"/>
      <input type="text" id="m_sixmw" class="span1" placeholder="mes"/>
      <input type="text" id="d_sixmw" class="span1" placeholder="d&iacute;a"/>
    </div>
    <div class="span2" style="text-align:right">
      Metros caminados
    </div>
    <div class="span1">
      <input type="text" id="walk_meters" class="span1" placeholder="Mts."/>
    </div>
  </div>
  <div class="row">
    <div class="span1" style="text-align:right">
      FI O2
    </div>
    <div class="span1">
      <input type="text" class="span1" id="walk_fio2" placeholder="%">
    </div>
    <div class="span1" style="text-align:right">
      Sat O2
    </div>
    <div class="span1">
      <input type="text" class="span1" placeholder="inicio %" id="start_sato2">
    </div>
    <div class="span2">
      <input type="text" class="span1"  placeholder="final %" id="end_sato2">
    </div>
    <div class="span1">Disnea:</div>
    <div class="span1">
      <select id="borg" class="span2">
        <option value="">Escala Borg...</option>
        <option value="0">0-  Sin disnea</option>
        <option value="0.5">0.5-  Muy muy leve</option>
        <option value="1">1-  Muy leve</option>
        <option value="2">2-  Leve</option>
        <option value="3">3-  Moderada</option>
        <option value="4">4-  Algo severa</option>
        <option value="5">5-  Severa</option>
        <option value="7">7-  Muy severa</option>
        <option value="9">9-  Muy, muy severa</option>
        <option value="10">10-  Disnea m&aacute;xima</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="span3">
      <b>Otros s&iacute;ntomas durante el test</b>
    </div>
  </div>
  <div class="row">
    <div class="span3" style="text-align:right">
      Lipotimia/S&iacute;ncope
    </div>
    <div class="span1">
      <input type="checkbox" id="walk_syncope">
    </div>
    <div class="span2" style="text-align:right" id="walk_chest_pain">
      Dolor t&oacute;racico
    </div>
    <div class="span1">
      <input type="checkbox">
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <br>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <a class="btn" id="sixmin_save">Guardar</a>
    </div>
  </div>
</div>
