<?php


include'connect.php';
session_start();
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
	
    <div class="main-wrapper">
        <?php include 'menu3.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
				
                <div class="page-header">
                    <div class="row">
                    <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li ><a href="patient_profile_dashboard.php?pid=<?php echo $pid;?>">Dashboard</a></li>
                                <li class="active"><a href="patient_profile1.php?pid=<?php echo $pid;?>">Patient Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
					<div class="card">
						<div class="card-body">
                        <div class="about-info">
							<h3><b>About Me</b></h3>
                        
                            <div class="row">
                                <div class="col-md-12"> 
                                <div class="media mt-3 d-flex">
                                        
                                      
											<div class="col-md-6">
												<ul>                                          
                                                    <li>
                                                        <span class="title-span">Patient_Id :</h4></span>
                                                        <span class="info-span"><?php echo $res['id']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Patient_Name:</span>
                                                        <span class="info-span"><?php echo $res['name']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Phone_Number:</span>
                                                        <span class="info-span"><?php echo $res['patient_phone_number']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">DOB:</span>
                                                        <span class="info-span"><?php echo $res['dob']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Spouse Name:</span>
                                                        <span class="info-span"><?php echo $res['spouse_name']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Spouse Age:</span>
                                                        <span class="info-span"><?php echo $res['spouse_age']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Spouse Contact: </span>
                                                        <span class="info-span"><?php echo $res['spouse_contact']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Present Address:</span>
                                                        <span class="info-span"><?php echo $res['present_address']; ?></span>
                                                    </li>
                                                </ul>
											</div>
										</div>

										<div class="row mt-3">                                           
										</div>
										
										<!-- <div class="row follow-sec">
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3><?php echo $res['lmp']; ?></h3>
                                                    <p>LMP</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3><?php echo $res['edd']; ?></h3>
                                                    <p>Expected Date of Delivery</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="blue-box">
                                                    <h3><?php echo $res['pog']; ?></h3>
                                                    <p>POG</p>
                                                </div>
                                            </div>
										</div> -->
										
									</div>
								</div>								
							</div>
						</div>
					</div>				
				<!-- </div> -->
				
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
			<!-- </div> -->
			<!-- /Page Wrapper -->
		
        <!-- </div> -->
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>