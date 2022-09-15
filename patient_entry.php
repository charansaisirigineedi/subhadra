<?php

include 'connect.php';



date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);

$pid = autoincemp($d);

function autoincemp($date)
{
    $date =str_replace("-","",$date);
    echo $date;
    global $value2;
    global $con;
    $query = "select id from patient_primary_information where id LIKE '%".$date."%' order by id desc LIMIT 1";
    $stmt = mysqli_query($con,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
      $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['id'];
        $value2 = substr($value2,9);
        $value2 = (int)$value2 + 1;
        $value2 = $date.sprintf('%s',$value2);
        $value = 'P'.$value2;
        return $value;
    } else {
        $str=$date;
        $value2 = $str.sprintf('%s',1);
        $value = 'P'.$value2;
        return $value;
    }
}

if(isset($_POST['submit']))
{
	
	$fname = $_POST['fname'];
	$dob = $_POST['pdob'];
	$gen = $_POST['gender'];
	$ppn = $_POST['ppn'];
	$pnn1=(int)$ppn;
	$pan = $_POST['pan'];
    $pan1=str_replace(' ','',$pan);
	$pan1=(int)$pan1;
	$cas = $_POST['caste'];
	$rel = $_POST['religion'];
	$pra = $_POST['pra'];
	$pea = $_POST['pea'];
	$pq = $_POST['pq'];
	$po = $_POST['po'];
	$sc=$_POST['sc'];
	$sc=(int)$sc;
	$sn=$_POST['sn'];
	$so=$_POST['so'];
	$sq=$_POST['sq'];
	$sd=$_POST['sdob']; 
	$sg=$_POST['sgender'];
	$lmp=$_POST['lmp'];
	$edd=$_POST['edd'];
	$pog=$_POST['pog'];
	$cd=$_POST['ct'];
	$ses=$_POST['estatus'];
	$sa=$_POST['san'];
	$san=str_replace(' ','',$sa	);
	$san1=(int)$san;
	$sage=$_POST['sage'];
	$age=$_POST['page'];



	$query = "INSERT INTO `patient_primary_information`(`id`, `name`, `dob`, `p_age`, `gender`, `patient_phone_number`, 
	`patient_aadhaar`, `caste`, `religion`, `present_address`, `permanent_address`, `patient_qualification`,
	 `patient_occupation`, `spouse_name`, `spouse_contact`, `spose_dob`, `spouse_age`, `spouse_gender`, 
	 `spouse_occupation`, `spouse_qualification`, `lmp`, `edd`, `pog`, `cardtype`, `socio_economic_status`, 
	 `spouse_aadhaar`) VALUES ('$pid','$fname','$dob','$age','$gen',
	'$pnn1','$pan1','$cas','$rel','$pra','$pea','$pq','$po','$sn',
	'$sc','$sd','$sage','$sg','$so','$sq','$lmp','$edd','$pog','$cd','$ses','$san1')";
	  $run = mysqli_query($con, $query);
	  echo" <script>document.location='eopre.php?pid=$pid'</script>";
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

	<?php include "menu1.php"; ?>

            <div class="page-wrapper">	
				<div class="content container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">OUT PATIENT REGISTRATION FORM</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">OUT PATIENT REGISTRATION FORM</li>
								</ul>
							</div>
						</div>
					</div> 	
					                <div class="form-group row">
										<div class="col-lg-12">
											<div class="row">
											<div class="col-md-6">
				                                <div class="form-group">
										                <label>Registration Date</label>
										                <input type="date" name="rd" id="rd" value="<?php echo $d; ?>" onchange="generate()" class="form-control"required>
													    <div class="invalid-feedback">
														Please choose "Registration date"
                                                        </div>
													</div>
                                                </div>	
									        
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
										            <input type="text" name="fname"  name="fname" onkeypress="return (event.charCode > 64 && 
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
																	<input type="date" name="pdob" id="pdob" placeholder="Date Of Birth"   onchange="getDob()" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																<input type="text" name="page" id="page" readonly="readonly" class="form-control"required>
																</div>
															</div>
														</div>
												</div>

												<div class="form-group">
													<label class="d-block">Patient Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="F">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>
												

												<div class="form-group">
										            <label>Patient Phone Number</label>
										            <input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength=10 name="ppn"name="ppn" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Phone Number"
                                                    </div>
									            </div>
												
												<div class="form-group">
										            <label>Patient Aadhar Number</label>
										            <input type="text"  id="aadhaarid" name="pan" pattern="^\d{4}\s\d{4}\s\d{4}${12}" maxlength=14 class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Aadhar Number"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Patient Qualification</label>
										            <input type="text" name="pq" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Qualification"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Patient Occupation</label>
										            <input type="text" name="po" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Occupatin"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Caste</label>
										            <input type="text" name="caste" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Caste"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Socio-Economic Status</label>
										            <input type="text" name="estatus" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "SE-status"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Present Address</label>
										            <textarea name="pra" class="form-control"required></textarea>
													<div class="invalid-feedback">
														Please choose "Present Address"
                                                    </div>
									            </div>
												<div class="form-group">
													<label>EDD</label>
													<input type="date" name="edd" class="form-control">
													<div class="invalid-feedback">
														Please choose "EDD"
													</div>
												</div>	
												<div class="form-group">
													<label>POG</label>
													<input type="date" name="pog" class="form-control">
													<div class="invalid-feedback">
														Please choose "POG"
													</div>
												</div>	

												
											</div>
											<div class="col-xl-6">
												<h5 class="card-title">SPOUSE DETAILS</h5>

											    <div class="form-group">
										            <label>Spouse Name</label>
										            <input type="text" name="sn" class="form-control" onkeypress="return (event.charCode > 64 && 
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
																	<input type="date" id="sdob" name="sdob" placeholder="Spouse DOB" onchange="getDob1()" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																<input type="text" name="sage" id="sage" readonly="readonly" class="form-control"required>
																</div>
															</div>
														</div>
												</div>

												<div class="form-group">
													<label class="d-block">Spouse Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="sgender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="sgender" id="gender_female" value="F">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>

												<div class="form-group">
										            <label>Spouse Phone Number</label>
										            <input type="text" pattern="[7-9]{1}[0-9]{9}" maxlength=10 name="sc" class="form-control">
													<div class="invalid-feedback">
														Please choose "Spouse Contact"
                                                    </div>
									            </div>
												
												<div class="form-group">
										            <label>Spouse Aadhar Number</label>
													<input type="text"  id="aadhaarid1" name="san" pattern="^\d{4}\s\d{4}\s\d{4}${12}" maxlength=14 class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Spouse Aadhar Number"
                                                    </div>
									            </div>

												<div class="form-group">
														<label>Spouse Qualification</label>
														<input type="text" name="sq" class="form-control">
														<div class="invalid-feedback">
															Please choose "Spouse Occupation"
														</div>
												</div>


												<div class="form-group">
														<label>Spouse Occupation</label>
														<input type="text" name="so" class="form-control"required>
														<div class="invalid-feedback">
															Please choose "Spouse Qualification"
														</div>
												</div>

												<div class="form-group">
										            <label>Religion</label>
										            <input type="text" name="religion" class="form-control">
													<div class="invalid-feedback">
														Please choose "Religion"
                                                    </div>
									            </div>
												<div class="form-group">
													<label>Card Type</label>
													<div>
														<select name="ct" class="form-control form-select"required>
															<option value="">-- Select --</option>
															<option value="white">White card</option>
															<option value="pink">Pink card</option>
														</select>
													</div>
													<div class="invalid-feedback">
																Please choose "card type"
													</div></div>

												<div class="form-group">
										            <label>Permanent Address</label>
										            <textarea  name="pea" class="form-control"></textarea>
													<div class="invalid-feedback">
														Please choose "Permanent Address"
                                                    </div>
									            </div>

												<div class="form-group">
													<label>LMP</label>
													<input type="date" name="lmp" class="form-control">
													<div class="invalid-feedback">
														Please choose "LMP"
													</div>
												</div><br>
										<div class="text-end">
											<button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
		</script>
		
    </body>
</html>