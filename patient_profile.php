<?php

include 'connect.php';

session_start();

include "check.php";

$pid = $_GET['pid'];
$query = "select  * from  patient_primary_information WHERE id='$pid'";

$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>EditPatient</title>
		
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
				    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<!-- <div class="card-header">
									<h5 class="card-title">Two Column Vertical Form</h5>
								</div> -->
								<div class="card-body">
									<form method="post">
										<!-- <h5 class="card-title">Personal Information</h5> -->
										<div class="row">
											<div class="col-md-6">
                                                <div class="form-group">
										            <label>Patient ID</label>
										            <input type="text" name="pid" class="form-control" disabled="disabled" value='<?php echo $pid;?>'>
													<div class="invalid-feedback">
														Please choose "Patient-ID"
                                                    </div>
									            </div>
												<div class="form-group">
										            <label>Full Name</label>
										            <input type="text" name="fname" class="form-control" disabled="disabled"  value='<?php echo $res["name"];?>' onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32) || (event.charCode==46)" >
													<div class="invalid-feedback">
														Please choose "Full Name"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Date of Birth</label>
										            <input type="date" name="dob" class="form-control" disabled="disabled" value=<?php echo  $res['dob'] ;?>>
													<div class="invalid-feedback">
														Please choose "Date of Birth"
                                                    </div>
									            </div>
												<div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" disabled="disabled" name="gender" id="gender_male"<?php if( $res['gender']=='M' ){echo "checked";}?> value="M" required>
														<label class="form-check-label" for="gender_male" value='M'>Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" disabled="disabled"  name="gender" id="gender_female" <?php if( $res['gender']=='F' ){echo "checked";}?>  value="F" required>
														<label class="form-check-label" for="gender_female" value='F'>Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>
                                                <div class="form-group">
										            <label>Patient Phone Number</label>
										            <input type="text" name="ppn" pattern="[6-9]{1}[0-9]{9}" maxlength=10 class="form-control" disabled="disabled" value='<?php echo  $res['patient_phone_number'] ;?>' required>
													<div class="invalid-feedback">
														Please choose "Patient Phone Number"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Patient Aadhar Number</label>
										            <input type="text" id="aadhaarid" name="pan" pattern="^\d{4}\s\d{4}\s\d{4}${12}" disabled="disabled" maxlength=14 class="form-control" value='<?php echo  $res['patient_aadhaar'] ;?>' required>
													<div class="invalid-feedback">
														Please choose "Patient Aadhar Number"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Caste</label>
										            <input type="text" name="caste" class="form-control" disabled="disabled" value='<?php echo $res['caste'];?>' required>
													<div class="invalid-feedback">
														Please choose "Caste"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Religion</label>
										            <input type="text" name="religion" class="form-control" disabled="disabled" value='<?php echo $res['religion'];?>' required>
													<div class="invalid-feedback">
														Please choose "Religion"
                                                    </div>
									            </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
										            <label>Present Address</label>
										            <textarea name="pra" class="form-control" disabled="disabled"  > <?php echo $res['present_address'];?> </textarea>
													<div class="invalid-feedback">
														Please choose "Present Address"
                                                    </div>
									            </div>
												<div class="form-group">
										            <label>Permanent Address</label>
										            <textarea  name="pea" class="form-control" disabled="disabled" > <?php echo $res['permanent_address'];?> </textarea>
													<div class="invalid-feedback">
														Please choose "Permanent Address"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Patient Qualification</label>
										            <input type="text" name="pq" class="form-control" disabled="disabled"  value='<?php echo $res['patient_qualification'];?>'>
													<div class="invalid-feedback">
														Please choose "Patient Qualification"
                                                    </div>
									            </div>
                                                <br>
                                            <div class="form-group">
											<label >Emergency Contact Person</label>
											<div>
												<select name="ecp" class="form-control form-select" disabled="disabled">
													<option value="">-- Select --</option>
													<option value='H' <?php if( $res['emergency_contact_person']=='H' ){echo "selected";}?>>Husband</option>
													<option value='F' <?php if( $res['emergency_contact_person']=='F' ){echo "selected";}?>>Father</option>
													<option value='M' <?php if( $res['emergency_contact_person']=='M' ){echo "selected";}?> >Mother</option>
													<option value='O' <?php if( $res['emergency_contact_person']=='O' ){echo "selected";}?> >Other</option>
												</select>
											</div>
                                            <div class="invalid-feedback">
														Please choose "Emergency Contact Person"
                                            </div>
										</div>
                                                <div class="form-group">
										            <label>Emergency Contact Number</label>
										            <input type="text" name="ecn" pattern="[7-9]{1}[0-9]{9}"  disabled="disabled" class="form-control"value='<?php echo $res['emergency_contact_number'];?>'required>
													<div class="invalid-feedback">
														Please choose "Emergency Contact Number"
                                                    </div>
									            </div>
											</div>
										</div>
										<h5 class="card-title">SPOUSE DETAILS</h5>
										<div class="row">
											<div class="col-md-6">
											<div class="form-group">
										            <label>Spouse Name</label>
										            <input type="text" name="sn"  disabled="disabled" class="form-control" value='<?php echo $res['spouse_name'];?>' onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" required>
													<div class="invalid-feedback">
														Please choose "Spouse Name"
                                                    </div>
									              </div>
												  <div class="form-group">
										            <label>Spouse Contact</label>
										            <input type="text" pattern="[7-9]{1}[0-9]{9}" disabled="disabled" maxlength=10 name="sc" value='<?php echo $res['spouse_contact'];?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Spouse Contact"
                                                    </div>
									              </div> 
												</div>
												<div class="col-md-6">
												<div class="form-group">
										            <label>Spouse Age</label>
										            <input type="number" name="sa" min=0 disabled="disabled"  value='<?php echo $res['spouse_age'];?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Spouse Age"
                                                    </div>
									             </div>
													<div class="form-group">
														<label>Spouse Qualification</label>
														<input type="text" disabled="disabled" value='<?php echo $res['spouse_qualification'];?>'  name="sq" class="form-control"required>
														<div class="invalid-feedback">
															Please choose "Spouse Qualification"
														</div>
													</div>
													</div>
												    <div class="col-md-6">
													<div class="form-group">
														<label>Spouse Occupation</label>
														<input type="text" name="so" disabled="disabled" value='<?php echo $res['spouse_occupation'];?>' class="form-control"required>
														<div class="invalid-feedback">
															Please choose "Spouse Occupation"
														</div>
												</div>
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
		<!-- AADHAAR SPACING-->
		<script>
			document.querySelector('#aadhaarid').addEventListener('keydown', (e) => {
            e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
            })
			/* Jquery */
			$('#aadhaarid').keyup(function() {
			$(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
			});
		</script>
    </body>
</html>