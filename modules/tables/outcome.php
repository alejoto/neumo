<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_outcome.outcome_dyspn
,hap_outcome.outcome_epid
,hap_outcome.endart_failure
,hap_outcome.lung_transplant
,hap_outcome.dead_date
,hap_outcome.dead_cause
,hap_outcome.dead_place
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_outcome LEFT JOIN  main_eval ON  main_eval.eval_id = hap_arterialgasses.eval_id
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
                <th class="span2">outcome_dyspn</th>
                <th class="span2">outcome_epid</th>
                <th class="span2">endart_failure</th>
                <th class="span2">lung_transplant</th>
                <th class="span2">dead_date</th>
                <th class="span2">dead_cause</th>
                <th class="span2">dead_place</th>
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
                    <td class="span2"><?php echo $row['outcome_dyspn']; ?></td>
                    <td class="span2"><?php echo $row['outcome_epid']; ?></td>
                    <td class="span2"><?php echo $row['endart_failure']; ?></td>
                    <td class="span2"><?php echo $row['lung_transplant']; ?></td>
                    <td class="span2"><?php echo $row['dead_date']; ?></td>
                    <td class="span2"><?php echo $row['dead_cause']; ?></td>
                    <td class="span2"><?php echo $row['dead_place']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>