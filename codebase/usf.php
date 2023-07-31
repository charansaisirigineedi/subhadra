<?php

include 'connect.php';  

session_start();

include "check.php";

$pid = $_GET['pid'];
$tid = $_GET['tid'];
$name = $_GET['name'];
$query = "SELECT `id`, `token_id`, `date_of_admission`, `time_of_admisssion`,`date_of_procedure`, `date_of_discharge`, `time_of_discharge`,
 `admission_room_type`, `no_of_days_of_stay`, `doctor_name`, `anesthetist_name`, `tod`, `nursing_staff`, `time`
  FROM `patient_surgery_form` WHERE id='$pid' and token_id='$tid' ";

$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);

if(isset($_POST['submit']))
{
	$date_admit = $_POST['dt_admit'];
	$time_admit = $_POST['t_admit'];
	$date_dicharge = $_POST['d_discharge'];
	$dop=$_POST['dop'];
	$time_discharge = $_POST['t_discharge'];
	$room_type = $_POST['roomtype'];
	$nds = $_POST['nds'];
	$tod=$_POST['td'];
	$d_name= $_POST['d_name'];
	$A_name = $_POST['A_name'];
	$N_staff=$_POST['N_staff'];
	$sugery = "UPDATE `patient_surgery_form` SET `id`='$pid',`token_id`='$tid',
	`date_of_admission`='$date_admit',`time_of_admisssion`='$time_admit',`date_of_procedure`='$dop',`date_of_discharge`='$date_dicharge',
	`time_of_discharge`='$time_discharge',`admission_room_type`='$room_type ',`no_of_days_of_stay`='$nds',`doctor_name`='$d_name',
	`anesthetist_name`='$A_name',`tod`='$tod',
	`nursing_staff`='$N_staff' WHERE id='$pid' and token_id='$tid'";
	$run = mysqli_query($con, $sugery);
	if($run){
	echo" <script>document.location='search-usf.php'</script>";}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>IN PATIENT PRENANCY SURGERY FORM</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<!-- Fontfamily -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="main-wrapper"> <?php include 'menu.php'; ?> <div class="page-wrapper">
			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">UPDATE SURGERY FORM - <?php echo $name;?></h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item active">UPDATE SURGERY FORM</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<form method="post" autocomplete="off" class="needs-validation" novalidate>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Patient ID</label>
												<input type="text" name="pid" class="form-control" disabled="disabled" value=<?php echo  $pid;?>>
											</div>
											<div class="form-group">
												<label>Date of Admission</label>
												<input type="date" class="form-control" value="<?php  echo $res['date_of_admission']; ?>" name="dt_admit" palceholder="Enter Date" required>
												<div class="invalid-feedback"> Please choose "Date of Admission" </div>
											</div>
											<div class="form-group">
												<label>Time of Admission</label>
												<input type="time" class="form-control" value="<?php  echo $res['time_of_admisssion']; ?>" name="t_admit" palceholder="Enter Time" required>
												<div class="invalid-feedback"> Please choose "Time of Admission" </div>
											</div>
											<div class="form-group">
												<label>Date of Procedure</label>
												<input type="date" class="form-control" name="dop" value="<?php echo $res['date_of_procedure'];?>" required>
												<div class="invalid-feedback"> Please choose "Date of Procedure" </div>
											</div>
											<div class="form-group">
												<label>Date of Discharge</label>
												<input type="date" class="form-control" value="<?php  echo $res['date_of_discharge']; ?>" name="d_discharge" required>
												<div class="invalid-feedback"> Please choose "Date of Discharge" </div>
											</div>
											<div class="form-group">
												<label>Time of Discharge</label>
												<input type="time" class="form-control" value="<?php  echo $res['time_of_discharge']; ?>" name="t_discharge" required>
												<div class="invalid-feedback"> Please choose "Time of Discharge" </div>
											</div>
											<div class="form-group">
												<label>Admission Room Type</label>
												<select name='roomtype' class="form-control" required>
													<option value="AC" <?php if( $res['admission_room_type']=='AC' ){echo "selected";}?>>AC</option>
													<option value="NON-AC" <?php if( $res['admission_room_type']=='NON-AC' ){echo "selected";}?>>NON-AC</option>
													<option value=AC>AC</option>
													<option value=NON-AC>Non-AC</option>
												</select>
												<div class="invalid-feedback"> Please choose "Admission Room Type" </div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Token ID</label>
												<input type="text" name="tid" class="form-control" value="<?php  echo $tid;?>" disabled="disabled" value=<?php echo  $tid;?>>
											</div>
											<div class="form-group">
												<label>No. of Days of stay:</label>
												<input type="number" class="form-control" value="<?php  echo $res['no_of_days_of_stay']; ?>" name="nds" required>
												<div class="invalid-feedback"> Please choose "No. of Days of stay" </div>
											</div>
											<div class="form-group">
												<label>Doctor Name:</label>
												<select name='d_name' class="form-control" required>
													<option value="Dr.Sree Ramys Amulya.V" <?php if( $res['doctor_name']=='Dr.Sree Ramys Amulya.V' ){echo "selected";}?>>Dr.Sree Ramys Amulya.V</option>
													<option value="Dr.Subhashini.V" <?php if( $res['doctor_name']=='Dr.Subhashini.V' ){echo "selected";}?>>Dr.Subhashini.V</option>
												</select>
												<div class="invalid-feedback"> Please choose "Doctor Name" </div>
											</div>
											<div class="form-group">
												<label>Anesthetian Name(if any)</label>
												<input type="text" name="A_name" class="form-control" value="<?php  echo $res['anesthetist_name'];?>">
											</div>
											<div class="form-group">
												<label>Type of Surgery</label>
												<div>
													<select name="td" class="form-control form-select" required>
														<option value="Hysterectomy" <?php if( $res['tod']=='Hysterectomy' ){echo "selected";}?>>Hysterectomy</option>
														<option value="D&C" <?php if( $res['tod']=='D&C' ){echo "selected";}?>>D&C</option>
														<option value="Tubectomy" <?php if( $res['tod']=='Tubectomy' ){echo "selected";}?>>Tubectomy</option>
														<option value="Ovarian Cystectomy" <?php if( $res['tod']=='Ovarian Cystectomy' ){echo "selected";}?>>Ovarian Cystectomy</option>
													</select>
												</div>
												<div class="invalid-feedback"> Please choose "Type of Surgery" </div>
											</div>
											<div class="form-group">
												<label>Nursing Staff</label>
												<textarea class="form-control" name="N_staff" required><?php  echo $res['nursing_staff']; ?></textarea>
												<div class="invalid-feedback"> Please choose "Nursing Staff" </div>
											</div>
										</div>
									</div>
							</div>
						</div>
						<div class="text-end">
							<button type="submit" name="submit" class="btn btn-primary">Update</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->
	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<!-- Form Validation JS -->
	<script src="assets/js/form-validation.js"></script>
</body>

</html>