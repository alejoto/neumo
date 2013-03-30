<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_gammagr.gamma_date
,hap_gammagr.gamma_tep
,hap_gammagr.gamma_defects
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_gammagr LEFT JOIN  main_eval ON  main_eval.eval_id = hap_arterialgasses.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id
ORDER BY main_patient.patient_id asc, t_st asc";
$result = mysqli_query($con,$sql);
?>
<!--main content here-->
<div class="">
  <div class="row" style="padding: 50px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="span2">Fecha</th>
                <th class="span2">Paciente</th>
                <th class="span2">Investigador</th>
                <th class="span2">gamma_date</th>
                <th class="span2">gamma_tep</th>
                <th class="span2">gamma_defects</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td class="span2"><?php echo $row['t_st']; ?></td>
                    <td class="span2"><?php echo $row['name']; ?><br/><?php echo $row['surn']; ?></td>
                    <td class="span2"><?php echo $row['ivt_name']; ?><br/><?php echo $row['ivt_surname']; ?></td>
                    <td class="span2"><?php echo $row['gamma_date']; ?></td>
                    <td class="span2"><?php echo $row['gamma_tep']; ?></td>
                    <td class="span2"><?php echo $row['gamma_defects']; ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>