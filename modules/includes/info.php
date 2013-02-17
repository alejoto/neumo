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
			$now=date('Y-m-d');
			$thisyear=(int)substr($now,0,4);
			$thismonth=substr($now,5,2);
			$today=substr($now,8,2);
			$this_month_and_day=$thismonth.$today;
			$this_month_and_day=(int)$this_month_and_day;

			$birthdate=$row['birthd'];
			$birthyear=(int)substr($birthdate,0,4);
			$birthmonth=substr($birthdate,5,2);
			$birthday=substr($birthdate,8,2);
			$birth_month_and_day=$birthmonth.$birthday;
			$birth_month_and_day=(int)$birth_month_and_day;

			if ($birth_month_and_day>$this_month_and_day) {echo $thisyear-$birthyear-1;}
			else {echo $thisyear-$birthyear;}
			?> a&ntilde;os 
		</p>
	</div>
</div>