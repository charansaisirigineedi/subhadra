<?php

$pid = $_GET['pid'];
$tid = $_GET['tid'];
include 'connect.php';
session_start();
$pid = $_GET['pid'];
$tid = $_GET['tid'];
$query = "select  * from  patient_primary_information WHERE id='$pid'";
$query1 = "select * from  patient_surgery_form WHERE id='$pid' and token_id='$tid'";
$query2 = "select * from  patient_discharge_form WHERE id='$pid' and tid='$tid'";

$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);

$run1 = mysqli_query($con, $query1);
$res1 = mysqli_fetch_assoc($run1);

$run2 = mysqli_query($con, $query2);
$res2 = mysqli_fetch_assoc($run2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>ADD OP BILLS</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">


	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<div>
		<div align="center">
				<h1 style="font-family:Calibri(Body);font-size:75px"><b>SUBHADRA HOSPITALS</b></h1>
		
		</div>
		<div align="center">
			<h4 style="font-family:Calibri(Body);font-size:40px "><b>&nbspJ.P.ROAD,BHIMAVARAM-534 202</b></h4>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h6 style="font-family:Calibri(Body);font-size:25px"><b>(Hosp.Reg.No.145/2010)</b></h6>
			</div>
			<div class="col-md-6">
				<div class="text-end">
					<i style="font-size:25px">&#9742;&nbsp;<b>08816 222209<br>08816 222309</b></i>
				</div>
			</div>
		</div>
		<u><b><hr></b></u>
		<div class="row">
			<div class="col-md-6">
				<div>
					<h4 style="font-family:Calibri(Body);font-size:30px"><b>Dr.Sree Ramya Amulya.V</b></h4>
					<h6 style="font-family:Calibri(Body);font-size:20px"><b>M.S.(OB/GYN),F.MAS,D.MAS</b></h6>
					<h6 style="font-family:Calibri(Body);font-size:20px"><b>Obstetrician/Gynecologist,Reg.No:68984</b></h6>
				</div>
			</div>
			<div class="col-md-6">
				<div class="text-end">
					<h4 style="font-family:Calibri(Body);font-size:30px"><b>Dr.Subhashini.V</b>&nbsp;</h4>
					<h6 style="font-family:Calibri(Body);font-size:20px"><b>M.B.B.S.</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</h6>
					<h6 style="font-family:Calibri(Body);font-size:20px"><b>Reg.No :10111,Consultant</b>&nbsp;&nbsp;</h6>
				</div>
			</div>
		</div>
		<u><hr></u>
	</div>
	<h3 style="font-family:Calibri(Body);font-size:45px" align="center"><u><b>DISCHARGE SUMMARY</b></u></h3><br>
	<div class="card-body">
		<div class="row">
		<div class="col-md-6">
		<p style="font-family:Calibri(Body);font-size:25px"><b>NAME &nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;  :</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res['name'];?></p></div><div class="col-md-6"><p style="font-family:Calibri(Body);font-size:25px"><b>AGE/SEX&emsp;  :&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp</b><?php echo $res['p_age']; ?>/<?php echo $res['gender']; ?></p></div></div>
		<p style="font-family:Calibri(Body);font-size:25px"><b>ADDRESS&emsp;:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp
			                C/O - <?php echo $res['spouse_name'];
							echo "<br>";
							echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp";
							echo "Ph.No-";
							echo $res['spouse_contact'];
							echo "<br>";
							echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp";
							echo $res['present_address'] ?>
		</p>
		<p style="font-family:Calibri(Body);font-size:25px"><b>DOA  :</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res1['date_of_admission'] ?></p>
		<p style="font-family:Calibri(Body);font-size:25px"><b>DOD&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;  :</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res1['date_of_discharge'] ?></p>
		<p style="font-family:Calibri(Body);font-size:25px"><b>ADMITTING &nbsp;DIAGNOSIS&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res2['admitting_diagnosis']; ?></label>
		<p style="font-family:Calibri(Body);font-size:25px"><b>TREATMENT &nbsp;GIVEN&emsp;&emsp;       &emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res2['treatment_given'] ?></label>
		<p style="font-family:Calibri(Body);font-size:25px"><b>CONDITIONS AT DISCHARGE&emsp;&emsp;:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res2['condition_at_discharge']; ?></p>
		<p style="font-family:Calibri(Body);font-size:25px"><b>MOTHER - VITALS </b><br>
		<b>TEMP: </b> <?php echo $res2['temp']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<b>PR: </b><?php echo $res2['pr']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<b>BP: </b><?php echo $res2['bp']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<b>H/L: </b><?php echo $res2['h/l']; ?><br>
		<b>BREASTS : </b><?php echo $res2['breasts']; ?><br>
		<b>P/A:</b><?php echo $res2['p/a']; ?><br>
		<b>P/V:</b><?php echo $res2['p/v']; ?><br>
		<b>LOCHIA:</b><?php echo $res2['lochia']; ?>
		<p style="font-family:Calibri(Body);font-size:25px"><b>ADVICE ON DISCHRGE:</b><?php echo $res2['advice_on_discharge']; ?><br>
		<b> DIET&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res2['diet']; ?><br>
		<b>Activity&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp<?php echo $res2['activity'] ?><br>
		<b>MEDICATIONS AND FOLLOW UP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp&nbsp&emsp;&emsp;&emsp;&emsp;<?php echo $res2['medications_and_follow_up']; ?>

	</div>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<!-- multiple choice -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
	<!-- <script>setTimeout("print()", 1000);</script> -->
</body>

</html>