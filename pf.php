<?php

include 'connect.php';

session_start();

include "check.php";
$pid = $_GET['pid'];
$name=$_GET['name'];
$token=autoincemp();
date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);
function autoincemp()
{
	date_default_timezone_set("Asia/Kolkata");
    $e = strval(date('Ymd'));
	$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);
    global $value2;
    global $con;
    $query = "select token_id from patient_inpatient_form where date(time)='$d' order by token_id desc LIMIT 1";
    $stmt = mysqli_query($con,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
      $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['token_id'];
        $value2 = substr($value2,6);
        $value2 = (int)$value2 + 1;
        $str=date("dmy");
        $value2 = $str.sprintf('%s',$value2);
        $value = $value2;
        return $value;
    } else {
        $str=date("dmy");
        $value2 = $str.sprintf('%s',1);
        $value = $value2;
        return $value;
    }
}

if(isset($_POST['submit']))
{
	$rd = $_POST['rd'];
	$toi = $_POST['toi'];
	$rfd = $_POST['rfd'];


	$query="INSERT INTO `patient_inpatient_form`
    (`token_id`, `patient_id`, `registration_date`, `type_of_inpatient`, `reason_for_admission`)
	VALUES ('$token','$pid','$rd','$toi','$rfd')";

    $run = mysqli_query($con, $query);
    echo "<script>document.location='dashboard.php'</script>";

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
        <div class="page-wrapper" >
				<div class="page-header">
						<div class="row">
							<div class="col">
							<h3 class="page-title"><?php echo strtoupper($name);?> Registering as InPatient</h3>
								
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
									<input type="text" name="tid" id="tid" class="form-control" disabled="disabled" value='<?php echo $token; ?>'>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient ID</label>
									<input type="text" name="pid" id="pid" class="form-control" disabled="disabled" value=<?php echo  $pid;?>>
								</div>
							</div>
						</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<form method="post" class="needs-validation" novalidate>
									 <h3 class="page-title">IN PATIENT REGISTRATION FORM</h3>
										<!-- <h5 class="card-title">Personal Information</h5> -->
										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
										            <label>Registration Date</label>
										            <input type="date" name="rd" id="rd" value="<?php echo $d; ?>" onchange="generate()" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Registration date"
                                                    </div>
									            </div>
												   <div class="form-group">
													<label>Type Of InPatient</label>
													<div>
														<select name="toi" class="form-control form-select"required>
															<option value="">-- Select --</option>
															<option value="Pregnancy">Pregnancy</option>
															<option value="Surgery">Surgery</option>
														</select>
													</div>
													<div class="invalid-feedback">
																Please choose "Type of Inpatient"
													</div></div>
											</div>
											<div class="col-md-6">
													<div class="form-group">
														<label>Reason For Admission</label>
														<textarea class="form-control" name="rfd"required></textarea>
														<div class="invalid-feedback">
															Please choose "Reason For Admission"
														</div>
													</div>
											</div>
											</div>
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