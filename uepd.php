<?php

include 'connect.php';

session_start();

include "check.php";


$pid = $_GET['pid'];
$query = "SELECT `id`, `name`, `dob`, `p_age`, `gender`, `patient_phone_number`, 
`patient_aadhaar`, `caste`, `religion`, `present_address`, `permanent_address`, `patient_qualification`, 
`patient_occupation`, `spouse_name`, `spouse_contact`, `spose_dob`, 
`spouse_age`, `spouse_gender`, `spouse_occupation`, `spouse_qualification`, `lmp`, 
`edd`, `pog`, `cardtype`, `socio_economic_status`, `spouse_aadhaar`, `date` 
FROM `patient_primary_information` WHERE id='$pid'";

$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);


if(isset($_POST['update']))
{
	
	$fname = $_POST['fname'];
	$fname=strtoupper($fname);
	$dob = $_POST['pdob'];
	$gen = $_POST['gender'];
	$gen=strtoupper($gen);
	$ppn = $_POST['ppn'];
	$pnn1=(int)$ppn;
	$pan = $_POST['pan'];
    $pan1=str_replace(' ','',$pan);
	$pan1=(int)$pan1;
	$cas = $_POST['caste'];
	$cas=strtoupper($cas);
	$rel = $_POST['religion'];
	$rel=strtoupper($rel);
	$pra = $_POST['pra'];
	$pea = $_POST['pea'];
	$pq = $_POST['pq'];
	$pq=strtoupper($pq);
	$po = $_POST['po'];
	$po=strtoupper($po);
	$sc=$_POST['sc'];
	$sc=(int)$sc;
	$sn=$_POST['sn'];
	$sn=strtoupper($sn);
	$so=$_POST['so'];
	$so=strtoupper($so);
	$sq=$_POST['sq'];
	$sq=strtoupper($sq);
	$sd=$_POST['sdob']; 
	$sg=$_POST['sgender'];
	$sg=strtoupper($sg);
	$lmp=$_POST['lmp'];
	$edd=$_POST['edd'];
	$pog=$_POST['pog'];
	$pog=strtoupper($pog);
	$cd=$_POST['ct'];
	$cd=strtoupper($cd);
	$ses=$_POST['estatus'];
	$ses=strtoupper($ses);
	$sa=$_POST['san'];
	$san=str_replace(' ','',$sa	);
	$san1=(int)$san;
	$sage=$_POST['sage'];
	$age=$_POST['page'];

	$query ="UPDATE `patient_primary_information` SET `id`='$pid' ,`name`='$fname',`dob`='$dob',`p_age`='$age'
    ,`gender`='$gen',`patient_phone_number`='$pnn1',`patient_aadhaar`='$pan1',`caste`='$cas',
    `religion`='$rel',`present_address`='$pra',`permanent_address`='$pea',`patient_qualification`='$pq'
    ,`patient_occupation`='$po',`spouse_name`='$sn',`spouse_contact`='$sc',`spose_dob`='$sd',
    `spouse_age`='$sage',`spouse_gender`='$sg',`spouse_occupation`='$so',`spouse_qualification`='$sq',
    `lmp`='$lmp',`edd`='$edd',`pog`='$pog',`cardtype`='$cd'
    ,`socio_economic_status`='$ses',`spouse_aadhaar`='$san1' WHERE id='$pid'";
	  $run = mysqli_query($con, $query);
	  echo" <script>document.location='dashboard.php?'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Subhadra Hospitals-OP Registration form</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		
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
								<h3 class="page-title">UPDATE PATIENT DETAILS - <?php echo $res['name'];?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">UPDATE PATIENT DETAILS</li>
								</ul>
							</div>
						</div>
					</div> 	                    
					                <div class="form-group row">
										<div class="col-lg-12">
											<div class="row">
			
									        
												<div class="col-md-6">
                                                <div class="form-group">
												
										            <label>Patient ID</label>
										            <input type="text" name="pid" id="pid" readonly="readonly" value="<?php echo $pid; ?>" class="form-control"required>
                                                </div>
									        </div>
                                        </div>
									</div>	
				<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">OUT PATIENT FORM</h5>
								</div>
								<div class="card-body">
								  <form method="post" autocomplete="off" class="needs-validation" novalidate>
										<div class="row">
											<div class="col-xl-6">

												<h5 class="card-title">PATIENT DETAILS</h5>
												<div class="form-group">
										            <label>Patient Name</label>
										            <input type="text" name="fname" value="<?php  echo $res['name']; ?>" name="fname" onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Name"
                                                    </div>
									            </div>

												<div class="col-lg-9">
														<div class="row">
															<label>Patient DOB</label>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="date" name="pdob" value="<?php  echo $res['dob']; ?>" id="pdob" placeholder="Date Of Birth"   onchange="getDob()" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																<input type="text" name="page" value="<?php  echo $res['p_age']; ?>" id="page" readonly="readonly" class="form-control"required>
																</div>
															</div>
														</div>
												</div>

												<div class="form-group">
													<label class="d-block">Patient Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" <?php if( $res['gender']=='M' ){echo "checked";}?> value="M" name="gender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" <?php if( $res['gender']=='F' ){echo "checked";}?> name="gender" id="gender_female" value="F">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>
												

												<div class="form-group">
										            <label>Patient Phone Number</label>
										            <input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength=10 value='<?php echo  $res['patient_phone_number'] ;?>' name="ppn"name="ppn" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Phone Number"
                                                    </div>
									            </div>
												
												<div class="form-group">
										            <label>Patient Aadhar Number</label>
										            <input type="text"  id="aadhaarid" name="pan" pattern="^\d{4}\s\d{4}\s\d{4}${12}" maxlength=14 value='<?php echo  $res['patient_aadhaar'] ;?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Aadhar Number"
                                                    </div>
									            </div>
												<div class="form-group">
													<label>Pan Card Number</label>
													<div>
													<input type="text" name="ct" maxlength=10  class="form-control" value='<?php echo $res['cardtype'];?>'  required>
												
													</div>
												</div>
												<div class="form-group">
										            <label>Patient Qualification</label>
										            <input type="text" name="pq" value='<?php echo $res['patient_qualification'];?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Qualification"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Patient Occupation</label>
										            <input type="text" name="po" value='<?php echo $res['patient_occupation'];?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Occupatin"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Caste</label>
										            <input type="text" name="caste" value='<?php echo $res['caste'];?>' class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Caste"
                                                    </div>
									            </div>

												

												<div class="form-group">
										            <label>Present Address</label>
										            <textarea name="pra"  class="form-control"required><?php echo $res['present_address'];?></textarea>
													<div class="invalid-feedback">
														Please choose "Present Address"
                                                    </div>
									            </div>
												<div class="form-group">
													<label>LMP</label>
													<input type="date" name="lmp" id="lmp"  value="<?php  echo $res['lmp']; ?>"  onchange="getEdd();getPog()"  class="form-control">
													<div class="invalid-feedback">
														Please choose "LMP"
													</div>
												</div>	
												<div class="form-group">
													<label>POG</label>
													<input type="text" name="pog" id="pog" value='<?php echo $res['pog'];?>' class="form-control">
													<div class="invalid-feedback">
														Please choose "POG"
													</div>
												</div>	

												
											</div>
											<div class="col-xl-6">
												<h5 class="card-title">SPOUSE DETAILS</h5>

											    <div class="form-group">
										            <label>Spouse Name</label>
										            <input type="text" name="sn" value='<?php echo $res['spouse_name'];?>' class="form-control" onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" required>
													<div class="invalid-feedback">
														Please choose "Spouse Name"
                                                    </div>
									            </div>
												<div class="col-lg-9">
														<div class="row">
															<label>Spouse DOB</label>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="date"  id="sdob" name="sdob" value="<?php  echo $res['spose_dob']; ?>" onchange="getDob1()" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																<input type="text" name="sage" id="sage" value="<?php  echo $res['spouse_age']; ?>"  readonly="readonly" class="form-control"required>
																</div>
															</div>
														</div>
												</div>

												<div class="form-group">
													<label class="d-block">Spouse Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" <?php if( $res['gender']=='M' ){echo "checked";}?> type="radio" name="sgender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" <?php if( $res['gender']=='F' ){echo "checked";}?>  type="radio" name="sgender" id="gender_female" value="F">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>

												<div class="form-group">
										            <label>Spouse Phone Number</label>
										            <input type="text" pattern="[7-9]{1}[0-9]{9}" value="<?php  echo $res['spouse_contact']; ?>"  maxlength=10 name="sc" class="form-control">
													<div class="invalid-feedback">
														Please choose "Spouse Contact"
                                                    </div>
									            </div>
												
												<div class="form-group">
										            <label>Spouse Aadhar Number</label>
													<input type="text"  id="aadhaarid1" name="san" value="<?php  echo $res['spouse_aadhaar']; ?>"   pattern="^\d{4}\s\d{4}\s\d{4}${12}" maxlength=14 class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Spouse Aadhar Number"
                                                    </div>
									            </div>
												<div class="form-group">
										            <label>Socio-Economic Status</label>
										            <input type="text" name="estatus" value='<?php echo $res['socio_economic_status'];?>'  class="form-control"required>
													<div class="invalid-feedback">
														Please choose "SE-status"
                                                    </div>
									            </div>
												<div class="form-group">
														<label>Spouse Qualification</label>
														<input type="text" value="<?php  echo $res['spouse_qualification']; ?>"  name="sq" class="form-control">
														<div class="invalid-feedback">
															Please choose "Spouse Occupation"
														</div>
												</div>


												<div class="form-group">
														<label>Spouse Occupation</label>
														<input type="text" name="so" value="<?php  echo $res['spouse_occupation']; ?>" class="form-control"required>
														<div class="invalid-feedback">
															Please choose "Spouse Qualification"
														</div>
												</div>

												<div class="form-group">
										            <label>Religion</label>
										            <input type="text" name="religion"  value="<?php  echo $res['religion']; ?>" class="form-control">
													<div class="invalid-feedback">
														Please choose "Religion"
                                                    </div>
									            </div>
												

												<div class="form-group">
										            <label>Permanent Address</label>
										            <textarea  name="pea" class="form-control"><?php echo $res['permanent_address'];?></textarea>
													<div class="invalid-feedback">
														Please choose "Permanent Address"
                                                    </div>
									            </div>

												<div class="form-group">
													<label>EDD</label>
													<input type="date" name="edd" id="edd" value='<?php echo $res['edd'];?>' class="form-control">
													<div class="invalid-feedback">
														Please choose "EDD"
													</div>
												</div><br>
										<div class="text-end">
											<button type="submit" name="update" class="btn btn-primary">Update</button>
										</div>
									</form>
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
			document.querySelector('#aadhaarid1').addEventListener('keydown', (e) => {
            e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
            })
			/* Jquery */
			$('#aadhaarid').keyup(function() {
			$(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
			});
		</script>

		<script>

			function generate() {
				let d = document.getElementById("rd").value;

				var xmlhttp=new XMLHttpRequest();
  				xmlhttp.onreadystatechange=function() {
    				if (this.readyState==4 && this.status==200) {
						console.log(this.responseText);
      					document.getElementById("pid").value=this.responseText;
    				}
 				}
  				xmlhttp.open("GET","generate_pid.php?date="+d,true);
  				xmlhttp.send();
			}

			function getDob() {

				let dob = document.getElementById("pdob").value;
				var xmlhttp=new XMLHttpRequest();
  				xmlhttp.onreadystatechange=function() {
    				if (this.readyState==4 && this.status==200) {
						console.log(this.responseText);
      					document.getElementById("page").value=this.responseText;
    				}
 				}
  				xmlhttp.open("GET","generate_dob.php?dob="+dob,true);
  				xmlhttp.send();
			}
			
			function getDob1() {
			let dob1 = document.getElementById("sdob").value;
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
					console.log(this.responseText);
					document.getElementById("sage").value=this.responseText;
				}
			}
			xmlhttp.open("GET","generate_dob.php?dob="+dob1,true);
			xmlhttp.send();
			}
			function getEdd() {
			let lmp1 = document.getElementById("lmp").value;
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
					console.log(this.responseText);
					document.getElementById("edd").value=this.responseText;
				}
			}
			xmlhttp.open("GET","generate_edd.php?lmp="+lmp1,true);
			xmlhttp.send();
			}
			function getPog() {
			let lmp2 = document.getElementById("lmp").value;
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
					console.log(this.responseText);
					document.getElementById("pog").value=this.responseText;
				}
			}
			xmlhttp.open("GET","generate_pog.php?lmp="+lmp2,true);
			xmlhttp.send();
			}
		</script>
		
    </body>
</html>