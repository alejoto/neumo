<?php
include '../DB/connect.php';

// Data in table first_eval left join main_eval
$sql    = "SELECT 
main_eval.t_st
,hap_first_eval.physician
,hap_first_eval.afroamerican
,hap_first_eval.dxdate
,hap_first_eval.yearofsymptoms
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_first_eval LEFT JOIN  main_eval ON  main_eval.eval_id = hap_first_eval.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id ";

// File that defines the permissions of the user logged
include_once('../tables/permission.php');
// If $table_total_permission is 'no', can see only his patients
if($table_total_permission == 'no')
    $sql    .= " where main_investigator.user_id = '".$_SESSION['username']."' ";

$sql    .= "ORDER BY main_patient.patient_id asc, t_st asc";
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
                <th class="span2">physician</th>
                <th class="span2">afroamerican</th>
                <th class="span2">dxdate</th>
                <th class="span2">yearofsymptoms</th>                
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
                    <td class="span2"><?php echo $row['physician']; ?></td>
                    <td class="span2"><?php echo $row['afroamerican']; ?></td>
                    <td class="span2"><?php echo $row['dxdate']; ?></td>
                    <td class="span2"><?php echo $row['yearofsymptoms']; ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>