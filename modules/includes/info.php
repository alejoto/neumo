<?php 
include '../DB/connect.php';
$docid=$_SESSION['hap_patient_id'];
$result = mysql_query("SELECT * FROM main_patient WHERE patient_id='$docid' "  );
$row = mysql_fetch_array($result);
?>
<div class="span3" style="width: 250px; margin-left: 40px;">

	<?php /*Choosing image for male or female gender*/
	if ($row['gender']=='male') { ?>
	<img src="../../assets/images/male.png"/>
	<?php }
	else if ($row['gender']=='female') { ?>
	<img src="../../assets/images/female.png"/>
	<?php } ?>

	<div class="pull-right" style="text-align: left; padding-top: 0px; font-size: 12px; ">
		<b> 			<?php  echo $row['name'].'<br/> '.$row['surn']; ?> </b>
		<br>Documento 	<?php echo $row['patient_id']; 					?>
		<p>
			<?php 
			echo time();
			?>
		</p>

  </div>
</div>
