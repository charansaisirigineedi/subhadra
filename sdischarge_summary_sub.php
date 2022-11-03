<?php
include 'connect.php';
session_start();
$pid = $_GET['pid'];
$tid = $_GET['tid'];
$query = "select  * from  patient_primary_information WHERE id='$pid'";
$query1 = "select * from  patient_surgery_form WHERE id='$pid' and token_id='$tid'";

$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);

$run1 = mysqli_query($con, $query1);
$res1 = mysqli_fetch_assoc($run1);


if (isset($_POST['submit'])) {
	$addiag = $_POST['ad'];
	$trgiven = $_POST['tg'];
	$condatdis = $_POST['cad'];
	
	$aod = $_POST['aod'];
	$diet = $_POST['diet'];
	$activity = $_POST['activity'];
	$mafu = $_POST['mafu'];
	$query2 = "INSERT INTO `patient_sdischarge_form`(`id`, `tid`, `admitting_diagnosis`, `treatment_given`, `condition_at_discharge`,  `advice_on_discharge`, `diet`, `activity`, `medications_and_follow_up`	) 
VALUES ('$pid','$tid','$addiag','$trgiven','$condatdis','$aod','$diet','$activity','$mafu')";
	$run2 = mysqli_query($con, $query2);
	if($run2)
	{
		echo "<script>document.location='sdischarge_summary.php?pid=$pid&tid=$tid';</script>";

	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Patient Details</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Fontfamily -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include 'menu.php'; ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<div class="page-header">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 align="center" class="page-title">DISCHARGE SUMMARY FORM</h3>
								</div>
								<div class="card-body">
									<form method="post"  class="needs-validation" novalidate>
										<div class="form-group">
											<label><b>NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp&nbsp<?php echo $res['name'] ?></label>
										</div>
										<div class="form-group">
											<label><b>SEX&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp <?php echo $res['gender'] ?></label>
										</div>
										<div class="form-group">
											<label><b>ADDRESS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp&nbsp <b>C/O</b> - <?php echo $res['spouse_name'];
																															echo "<br>";
																															echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
																															echo "<b>Ph.No</b> -";
																															echo $res['spouse_contact'];
																															echo "<br>";
																															echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
																															echo $res['present_address'] ?></label>
										</div>
										<div class="form-group">
											<label><b>DOA&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp&nbsp
											<?php 
											 $newDate = date("d-m-Y", strtotime($res1['date_of_admission']));  
											 $dd = strval($newDate);
											echo $dd; 
											?></label>
										</div>
										<div class="form-group">
											<label><b>DOP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp&nbsp
											<?php 
											 $newDate = date("d-m-Y", strtotime($res1['date_of_procedure']));  
											 $dd = strval($newDate);
											echo $dd; 
											?></label>
										</div>
										<div class="form-group">
											<label><b>DOD&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> :&nbsp&nbsp
											<?php 
											 $newDate = date("d-m-Y", strtotime($res1['date_of_discharge']));  
											 $dd = strval($newDate);
											echo $dd; 
											?></label>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label><b>ADMITTING DIAGNOSIS</b> </label>
												<input type="text" name="ad" class="form-control" required>
												<div class="invalid-feedback">
													Please choose "Diagnosis"
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label><b>TREATMENT GIVEN</b></label>
													<textarea name="tg" class="form-control"required></textarea>
													<div class="invalid-feedback">
														Please choose "Treatment Given"
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label><b>CONDITIONS AT DISCHARGE</b></label>
													<textarea name="cad" class="form-control"required></textarea>
													<div class="invalid-feedback">
														Please choose "Conditions at Discharge"
													</div>
												</div>
											</div>
										</div>



																			
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label><b>ADVICE ON DISCHARGE</b></label>
														<textarea name="aod" class="form-control"required></textarea>
														<!-- <input list="AOD" name="aod" id="A_name" class="form-control"required>
														<datalist id="AOD">

															<option value="CALL FOR INCREASED PAIN">
															<option value="FEVER">
															<option value="AS INCREASED BLEEDING">
														</datalist>-->
														<div class="invalid-feedback">
															Please choose "ADVICE ON DISCHARGE"
														</div> 
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label><b>DIET</b></label>
														<textarea name="diet" class="form-control"required></textarea>
														<!-- <input list="DIET" name="diet" id="A_name" class="form-control"required>
														<datalist id="DIET">
															<option value="REGULAR">
															<option value="ADVANCE">
															<option value="TOLERATED">
														</datalist> -->
														<div class="invalid-feedback">
															Please choose "ADVICE ON DISCHARGE"
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label><b>Activity:</b></label>
														<textarea name="activity" class="form-control"required></textarea>
														<!-- <div>
															<input type="checkbox" id="activity" value=" Pelvic rest for 6 weeks i.e.,no sex" name="activity[]">
															<label> Pelvic rest for 6 weeks i.e.,no sex</label><br>
															<input type="checkbox" id="activity" value=" no heavy lifting" name="activity[]">
															<label> no heavy lifting</label><br>
															<input type="checkbox" id="activity" value="Slow increase as tolerated" name="activity[]">
															<label> Slow increase as tolerated</label><br><br>

														</div> -->
														<div class="invalid-feedback">
															Please choose "Activity"
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label><b>MEDICATIONS AND FOLLOW UP</b> </label>
														<textarea name="mafu" class="form-control"required>AS PER <?php echo $res1['doctor_name']; ?></textarea>
														<div class="invalid-feedback">
															Please choose "MEDICATIONS AND FOLLOW UP"
														</div>
													</div>
												</div>
											</div>
											<div class="text-end">
												<button type="submit" class="btn btn-primary" name="submit">Submit </button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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

	<!-- Form Validation JS -->
	<script src="assets/js/form-validation.js"></script>
</body>
setTimeout("print()", 1000);
</html>