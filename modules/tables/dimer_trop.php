<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_dimer_trop.d_dimer_date
,hap_dimer_trop.d_dimer_value
,hap_dimer_trop.trop_date
,hap_dimer_trop.trop_result
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_dimer_trop LEFT JOIN  main_eval ON  main_eval.eval_id = hap_dimer_trop.eval_id
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
                <th class="span2">bld_gass_date</th>
                <th class="span2">bld_gass_fio2</th>
                <th class="span2">bld_gass_ph</th>
                <th class="span2">bld_gass_paco2</th>
                <th class="span2">bld_gass_pao2</th>
                <th class="span2">bld_gass_hco3</th>
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
                    <td class="span2"><?php echo $row['d_dimer_date']; ?></td>
                    <td class="span2"><?php echo $row['d_dimer_value']; ?></td>
                    <td class="span2"><?php echo $row['trop_date']; ?></td>
                    <td class="span2"><?php echo $row['trop_result']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>