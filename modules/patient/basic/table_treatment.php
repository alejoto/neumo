<?php
$usr=$_SESSION['hap_patient_id'];
include '../DB/connect.php';
$sql    = "SELECT * FROM hap_drug_treatment 
LEFT JOIN main_eval 
ON hap_drug_treatment.eval_id=main_eval.eval_id  
WHERE main_eval.patient_id='".$usr."'";
$result = mysql_query($sql);
echo '----'.$usr.'----';
?>

<table id='treatment_tb' class="table table-hover span8">
  <tr class="span8">
    <th class="span3">F&aacute;rmaco</th>
    <th class="span2">Fecha inicio</th>
    <th class="span2">Fecha susp</th>
    <th class="span2">Motivo susp</th>
  </tr>
  <?php 
  while($row = mysql_fetch_array($result)) {?>
  <tr class="span8">
    <tr class="span8">
    <td class="span3"><?php echo $row['drug'] ;?></td>
    <td class="span2"><?php echo $row['drug_ini'] ;?></td>
    <td class="span2">
      <?php 
      if ($row['drug_end']==null||$row['drug_end']=='') {?>
      <a href='#'>Agregar</a>
      <?php } 
      else {
        echo $row['drug_end'];
      }?>
    </td>
    <td class="span2">
      <?php 
      if ($row['suspend_cause']==null||$row['suspend_cause']=='') {?>
      <a href='#'>Agregar</a>
      <?php } 
      else {
        echo $row['suspend_cause'];
      }?>

    </td>
  </tr>
  <?php } ?>
  <tr class="span8">
    <td class="span3">
      <a rel="tooltip" title="agregar medicamento" id="ad_drug">
        <i class="icon-plus-sign"></i>
         A&ntilde;adir f&aacute;rmaco</a>
    </td>
    <td class="span2"></td>
    <td class="span2"></td>
    <td class="span2"></td>
  </tr>
</table>