<!--main content here-->
<div class="container">
  <div class="row">
    
    
    <div class="span12">
      
      <div class="well well-small span12" style="color: gray; margin-top: 40px; text-align: center;">
        <h5 style="margin: 10px 0px 0px 10px; float: left;" class="span2">Graficando</h5>
        <div style="float: left; margin-top: 10px; margin-left: 0px;">|</div>

        <div style="float: left; margin-left: 60px; margin-top: 0px;" >
          Datos a graficar: &nbsp;
          <select class="span2" id="pregnant" style="margin-top: 7px;">
            <option value=""></option>
            <option value="pacientes">pacientes</option>
          </select>
        </div>

        <div style="float: left; margin-left: 30px; margin-top: 0px;" >
          Tipo de grafica: &nbsp;
          <select class="span2" id="graph_type" style="margin-top: 7px;">
            <option value=""></option>
            <option value="combo">Combo</option>
            <option value="line_time_zoom">Line Time Zoom</option>
            <option value="spline">Spline</option>
            <option value="spline_dynamic">Spline Dynamic</option>
          </select>
        </div>
        
        <input class="btn btn-inverse" type="button" id="graph" value="Graficar" style="margin-top: 7px; float:left; margin-left: 30px;">
      </div>
      
      <div class="well well-small span12" id="graph_area" style="height: 400px; margin-top: 0px; padding: 40px 10px 40px 10px;">
        
      </div>
          
    </div>
      
  
  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/statistics.js"></script>