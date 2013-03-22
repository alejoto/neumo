<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT * FROM main_patient LEFT JOIN add_data_patient 
            ON main_patient.patient_id = add_data_patient.patient_id
            ORDER BY name asc, surn asc";
$result = mysqli_query($con,$sql);
?>
<!--main content here-->
<div class="">
  <div class="row" style="padding: 50px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Genero</th>
                <th>Id</th>
                <th>Pa&iacute;s de nacimiento</th>
                <th>Ciudad de nacimiento</th>
                <th>Estado</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Tel&eacute;fono</th>
                <th>EPS</th>
                <th>Pa&iacute;s de Residencia</th>
                <th>Ciudad de Residencia</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surn']; ?></td>
                    <td><?php echo $row['birthd']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['patient_id']; ?></td>
                    <td><?php echo $row['countrybth']; ?></td>
                    <td><?php echo $row['citybth']; ?></td>
                    <td><?php echo $row['statebth']; ?></td>
                    <td><?php echo $row['digiter_id']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['eps']; ?></td>
                    <td><?php echo $row['countryreside']; ?></td>
                    <td><?php echo $row['cityreside']; ?></td>
                    <td><?php echo $row['statereside']; ?></td>
                    <td>
                        <button type="submit" class="btn btn-mini btn-primary">Ver</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
   
  
  </div>
</div>
