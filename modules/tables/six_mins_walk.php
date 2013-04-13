<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_six_mins_walk.walk_date
,hap_six_mins_walk.walk_meters
,hap_six_mins_walk.walk_fio2
,hap_six_mins_walk.start_sato2
,hap_six_mins_walk.end_sato2
,hap_six_mins_walk.walk_symptoms
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_six_mins_walk LEFT JOIN  main_eval ON  main_eval.eval_id = hap_six_mins_walk.eval_id
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
                <th class="span2">walk_date</th>
                <th class="span2">walk_meters</th>
                <th class="span2">walk_fio2</th>
                <th class="span2">start_sato2</th>
                <th class="span2">end_sato2</th>
                <th class="span2">walk_symptoms</th>
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
                    <td class="span2"><?php echo $row['walk_date']; ?></td>
                    <td class="span2"><?php echo $row['walk_meters']; ?></td>
                    <td class="span2"><?php echo $row['walk_fio2']; ?></td>
                    <td class="span2"><?php echo $row['start_sato2']; ?></td>
                    <td class="span2"><?php echo $row['end_sato2']; ?></td>
                    <td class="span2"><?php echo $row['walk_symptoms']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>