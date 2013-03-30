<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_hemo_tropo.tropo_date
,hap_hemo_tropo.tropo_trop_result
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_hemo_tropo LEFT JOIN  main_eval ON  main_eval.eval_id = hap_arterialgasses.eval_id
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
                <th class="span2">tropo_date</th>
                <th class="span2">tropo_trop_result</th>
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
                    <td class="span2"><?php echo $row['tropo_date']; ?></td>
                    <td class="span2"><?php echo $row['tropo_trop_result']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>