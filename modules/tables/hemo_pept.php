<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_hemo_pept.pept_date
,hap_hemo_pept.pept_pep_natr_value
,hap_hemo_pept.pept_pro_pep_natr_value
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_hemo_pept LEFT JOIN  main_eval ON  main_eval.eval_id = hap_hemo_pept.eval_id
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
                <th class="span2">pept_date</th>
                <th class="span2">pept_pep_natr_value</th>
                <th class="span2">pept_pro_pep_natr_value</th>                
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
                    <td class="span2"><?php echo $row['pept_date']; ?></td>
                    <td class="span2"><?php echo $row['pept_pep_natr_value']; ?></td>
                    <td class="span2"><?php echo $row['pept_pro_pep_natr_value']; ?></td>                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>