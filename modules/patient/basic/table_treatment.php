<?php
$usr=$_SESSION['hap_patient_id'];
include '../DB/connect.php';
$sql    = "SELECT * FROM hap_drug_treatment 
LEFT JOIN main_eval 
ON hap_drug_treatment.eval_id=main_eval.eval_id  
WHERE main_eval.patient_id='".$usr."'";
$result = mysqli_query($con,$sql);
?>

<table id='treatment_tb' class="table table-hover span8">
  <tr class="span8">
    <th class="span2">F&aacute;rmaco</th>
    <th class="span2">Fecha inicio</th>
    <th class="span3">Fecha susp</th>
    <th class="span2">Motivo susp</th>
  </tr>
  
  <?php 
  while($row = mysqli_fetch_array($result)) {?>
  <tr class="span9">
    <tr class="span8">
    <td class="span2"><?php echo $row['drug'] ;?></td>
    <td class="span2"><?php echo $row['drug_ini'] ;?></td>
    <td class="span3">
      <?php 
      if ($row['drug_end']==null||$row['drug_end']=='') {?>
      <div class="span3 susp_date" style="display: none">
        <input type="text" id="year_end_d" class="span1" placeholder="a&ntilde;o"/>
        <input type="text" id="month_end_d" class="span1" placeholder="mes"/>
        <input type="text" id="day_end_d" class="span1" placeholder="d&iacute;a"/>
      </div>
      <?php } 
      else {
        echo $row['drug_end'];
      }?>
    </td>
    <td class="span2">
      <?php 
      if ($row['suspend_cause']==null||$row['suspend_cause']=='') {?>					
			<div class="dropdown">
 				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Agregar</a>
  			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
  				<li value=""><a class="susp_cause" tabindex="-1">No ha habido suspensi&oacute;n</a></li>
  				<li value=""><a class="susp_cause" tabindex="-1">Evento adverso</a></li>
					<li value=""><a class="susp_cause" tabindex="-1">Desersi&oacute;n al tratamiento</a></li>
  				<li value=""><a class="susp_cause" tabindex="-1">Negaci&oacute;n por asegurador</a></li>
					<li value=""><a class="susp_cause" tabindex="-1">Mejor&oacute; con otro tratamiento</a></li>
					<li value=""><a class="susp_cause" tabindex="-1">Paciente fallecido</a></li>
					<li value=""><a class="susp_cause" tabindex="-1">Otras causas</a></li>
  			</ul>
			</div>
				
		 <?php } 
      else {
        echo $row['suspend_cause'];
      }?>

    </td>
    <td style="border-width: 0" >
    	<a class="btn susp_save">Guardar</a>
    </td>
  </tr>
  <?php } ?>
  <tr class="span8">
    <td class="span3">
      <a rel="tooltip" title="agregar medicamento" id="ad_drug" >
        <i class="icon-plus-sign"></i>
         A&ntilde;adir f&aacute;rmaco</a>
    </td>
    <td class="span2"></td>
    <td class="span2"></td>
    <td class="span2"></td>
  </tr>
</table>