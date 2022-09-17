<?php

include 'connect.php';

session_start();

include "check.php";
$pid=$_GET['pid'];
$sql=mysqli_query($con,"select name,lmp,edd,pog from patient_primary_information where id='$pid' ");
$res=mysqli_fetch_assoc($sql);
$name=$res['name'];

if(isset($_POST['submit']))
{
	$g = $_POST['g'];
	$l = $_POST['l'];
	$p = $_POST['p'];
	$a = $_POST['a'];
	$d = $_POST['d'];
	$hrp=$_POST['hrp'];

	$query="INSERT INTO `pastrecords`(`patient_id`, `g`, `l`, `p`, `a`, `d`, `high_risk_pregnancy`) VALUES ('$pid','$g','$l','$p','$a','$d','$hrp')";

    $run = mysqli_query($con, $query);
    echo "<script>document.location='ou_list.php'</script>";

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
	
		<?php include "menu2.php"; ?>
            <div class="page-wrapper">
				<div class="content container-fluid">
				<div class="page-header">
						<div class="row">
							<div class="col">
							<h3 class="page-title">Patient Past Record-<?php echo strtoupper($name);?></h3>
								
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Patient Past Record</li>
								</ul>
							</div>
						</div>
					</div> 	
					<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>LMP</label>
							<input type="date"  name="lmp" id="lmp"  readonly="readonly" value="<?php echo $res['lmp'];?>" class="form-control">
							<div class="invalid-feedback">
								Please choose "LMP"
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>EDD</label>
							<input type="date"  name="edd" id="edd" readonly="readonly"  value="<?php echo $res['edd'];?>" class="form-control">
							<div class="invalid-feedback">
								Please choose "EDD"
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>POG</label>
							<input type="text"  name="pog" id="pog"  readonly="readonly" value="<?php echo $res['pog'];?>" class="form-control">
							<div class="invalid-feedback">
								Please choose "POG"
							</div>
						</div>
					</div></div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<form method="post" class="needs-validation" novalidate>
									 <!-- <h3 class="page-title">Patient Past Record</h3> -->
										<!-- <h5 class="card-title">Personal Information</h5> -->
										<div class="row">
											<div class="col-md-2">
											  <div class="form-group">
										            <label>G</label>
										            <input type="number" min=0  name="g" id="g"  class="form-control">
													<div class="invalid-feedback">
														Please choose "G"
                                                    </div>
									            </div>
                                            </div>
											<div class="col-md-2">
											  <div class="form-group">
										            <label>L</label>
										            <input type="number" min=0 name="l" id="l"  class="form-control">
													<div class="invalid-feedback">
														Please choose "L"
                                                    </div>
									            </div>
                                            </div>
                                                <div class="col-md-2">
											  <div class="form-group">
										            <label>P</label>
										            <input type="number"  min=0 name="p" id="p" class="form-control">
													<div class="invalid-feedback">
														Please choose "P"
                                                    </div>
									            </div></div>
                                                <div class="col-md-2">
											  <div class="form-group">
										            <label>A</label>
										            <input type="number"  min=0 name="a" id="a" class="form-control">
													<div class="invalid-feedback">
														Please choose "A"
                                                    </div>
									            </div>
											</div>
											<div class="col-md-2">
											  <div class="form-group">
										            <label>D</label>
										            <input type="number"  min=0 name="d" id="d" class="form-control">
													<div class="invalid-feedback">
														Please choose "R"
                                                    </div>
									            </div>
											</div>
											<div class="col-md-2">
											  <div class="form-group">
										            <label>High Rist Pregnancy</label>
										            <input list="charges" name="hrp" id="hrp" class="form-control">
													<datalist id="charges">
													
                                                        <option value="Bp">
                                                        <option value="Sugar">
                                                        <option value="Heart Stroke" >
                                                        <option value="Fits">
                                                    </datalist>
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

					      <div class="card">
								<div class="card-header">
									<h5 class="card-title">Booking Details<?#php echo $rund['name']; ?></h5>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>PATIENT_ID</th>
													<th>NAME</th>
													<th>G</th>
													<th>L</th>
													<th>P</th>
													<th>A</th>
													<th>D</th>
													<th>High Risk Pregnancy</th>
													<th>DATE</th>
												</tr>
											</thead>
											<tbody>
												<?php
													if(true)
													{
														$query="SELECT `patient_id`, `g`, `l`, `p`, `a`, `d`, `high_risk_pregnancy`as `hrp`, `date` FROM `pastrecords` ORDER BY date";
														$gen=mysqli_query($con,$query);
														$i = 0;
														foreach($gen as $data)
														{
															$str = $data['date'];
															$delimiter = ' ';
															$words = explode($delimiter, $str);
															$newDate = date("d-m-Y", strtotime($words[0]));  

															echo 
															'<tr><td>'.$pid.'</td>
															<td>'.$name.'</td>
															<td>'.$data['g'].'</td>
															<td>'.$data['l'].'</td>
															<td>'.$data['p'].'</td>
															<td>'.$data['a'].'</td>
															<td>'.$data['d'].'</td>
															<td>'.$data['hrp'].'</td>
															<td>'.$newDate.'</td>
															<td></tr>';
														}
													}
												?>
											</tbody>	
										</table>
									</div>
								</div>
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