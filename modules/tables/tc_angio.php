<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_tc_angio.a_tc_date
,hap_tc_angio.a_tc_main_pulm_art_diamt
,hap_tc_angio.a_tc_rt_pulm_art_diamt
,hap_tc_angio.a_tc_left_pulm_art_diamt
,hap_tc_angio.a_tc_rt_heart_dilat
,hap_tc_angio.a_tc_tep_pattern
,hap_tc_angio.a_tc_pulm_thrombos
,hap_tc_angio.a_tc_inft_interst
,hap_tc_angio.a_tc_inft_alv
,hap_tc_angio.a_tc_inft_nodular
,hap_tc_angio.a_tc_inft_retic
,hap_tc_angio.a_tc_inft_honeycomb
,hap_tc_angio.a_tc_infiltr_extent
,hap_tc_angio.a_tc_congenit
,hap_tc_angio.a_tc_congenit_otros
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_tc_angio LEFT JOIN  main_eval ON  main_eval.eval_id = hap_tc_angio.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id ";

// File that defines the permissions of the user logged
include_once('../tables/permission.php');
// If $table_total_permission is 'no', can see only his patients
if($table_total_permission == 'no')
    $sql    .= " where main_investigator.user_id = '".$_SESSION['username']."' ";

$sql    .= " ORDER BY main_patient.patient_id asc, t_st asc";
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
                <th class="span2">a_tc_date</th>
                <th class="span2">a_tc_main_pulm_art_diamt</th>
                <th class="span2">a_tc_rt_pulm_art_diamt</th>
                <th class="span2">a_tc_left_pulm_art_diamt</th>
                <th class="span2">a_tc_rt_heart_dilat</th>
                <th class="span2">a_tc_tep_pattern</th>
                <th class="span2">a_tc_pulm_thrombos</th>
                <th class="span2">a_tc_inft_interst</th>
                <th class="span2">a_tc_inft_alv</th>
                <th class="span2">a_tc_inft_nodular</th>
                <th class="span2">a_tc_inft_retic</th>
                <th class="span2">a_tc_inft_honeycomb</th>
                <th class="span2">a_tc_infiltr_extent</th>
                <th class="span2">a_tc_congenit</th>
                <th class="span2">a_tc_congenit_otros</th>
                
                
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
                    <td class="span2"><?php echo $row['a_tc_date']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_main_pulm_art_diamt']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_rt_pulm_art_diamt']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_left_pulm_art_diamt']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_rt_heart_dilat']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_tep_pattern']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_pulm_thrombos']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_inft_interst']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_inft_alv']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_inft_nodular']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_inft_retic']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_inft_honeycomb']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_infiltr_extent']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_congenit']; ?></td>
                    <td class="span2"><?php echo $row['a_tc_congenit_otros']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>