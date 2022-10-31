<?php

include 'connect.php';

session_start();

include "check.php";
$pid = $_GET['pid'];
$name=$_GET['name'];
$token=$_GET['tid'];
date_default_timezone_set("Asia/Kolkata");

if(isset($_POST['submit']))
{
	$mam = $_POST['mam'];
	$mad = $_POST['mad'];
	$td = $_POST['td'];
	$tk = $_POST['tk'];
	$now=$_POST['now'];
	$gen=$_POST['gender'];
	$wb=$_POST['wb'];

	$query="INSERT INTO `patient_pregnancy_information`(`id`, `token_id`, `mother_age_at_time_of_marriage`, `mother_age_at_time_of_delivery`, `type_of_delivery`, `number_of_kids_including_this`, `no.of.weeks`, `gender`, `weight`) VALUES ('$pid','$token','$mam','$mad','$td','$tk','$now','$gen','$wb')";


    $run = mysqli_query($con, $query);
    echo" <script>document.location='dashboard.php'</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Pregnancy-Form</title>
		
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
	
	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
				<div class="page-header">
						<div class="row">
							<div class="col">
							<h3 class="page-title"><?php echo strtoupper($name);?> Patient Pregnancy Registration</h3>
								
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">IN PATIENT REGISTRATION FORM</li>
								</ul>
							</div>
						</div>
					</div> 	
					    <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Token ID</label>
									<input type="text" name="pid" class="form-control" readonly="readonly" value='<?php echo $token; ?>'>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient ID</label>
									<input type="text" name="pid" class="form-control" readonly="readonly" value=<?php echo  $pid;?>>
								</div>
							</div>
						</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<form method="post" class="needs-validation" novalidate>
									 <h3 class="page-title">PREGNANCY REGISTRATION FORM</h3>
										<!-- <h5 class="card-title">Personal Information</h5> -->
										<div class="row">
                                           <div class="col-md-6">
											   <div class="form-group">
										            <label>Mother Age at the Time of Marriage</label>
										            <input type="number" name="mam" min=0 class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Mother Age at the Time of Marriage"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Mother Age at the Time of Delivery</label>
										            <input type="number" name="mad" min=0  class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Mother Age at the Time of Delivery"
                                                    </div>
                                                </div>
                                              </div>
											<div class="col-md-6">
                                                <div class="form-group">
											        <label>Type of Delivery</label>
											        <div>
												        <select name="td" class="form-control form-select"required>
													    <option value="">-- Select --</option>
													    <option value="Normal">Normal</option>
													    <option value="LSCS">LSCS</option>
												        </select>
													</div>
													<div class="invalid-feedback">
														Please choose "Type of Delivery"
                                                    </div>
										        </div>
                                                <div class="form-group">
										            <label>Number of Kids Including This</label>
										            <input type="number" min=0 name="tk" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Number of Kids Including This"
                                                    </div>
									            </div>
											</div>
											</div>

                                        <h3 class="card-title">NEW BORN BABY DETAILS</h3>
										<div class="row">
											<div class="col-md-6">
											<div class="form-group">
										            <label>Number Of weeks</label>
										            <input type="number" name="now" class="form-control" required>
													<div class="invalid-feedback">
														Please choose "Number of weeks"
                                                    </div>
									              </div>
												  <div class="form-group">
										            <label>Weight of the Baby (In KiloGrams-kg)</label>
										            <input type="number" step="any" min="0" name="wb" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Weight of the baby"
                                                    </div>
									              </div> 
												</div>
												<div class="col-md-6">
												  <div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="F" checked>
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												  </div>
                                               </div>
										
										<div class="text-end">
											<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
				
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
		<script  src="assets/js/script.js"></script>
		<!-- Form Validation JS -->
		<script src="assets/js/form-validation.js"></script>
    </body>
</html>