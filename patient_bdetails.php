<?php

include 'connect.php';

session_start();

$sql = mysqli_query($con,"select distinct(eor.token_id) as tid, 
 eor.id as pid,eor.date as date,ppi.name as name, ppi.patient_phone_number
 as patient_phone_number,eor.time from  existing_op_record eor,
  patient_primary_information ppi where eor.id = ppi.id order by eor.time desc");

 $sql1 = mysqli_query($con,"select distinct(eor.token_id) as tid, 
 eor.patient_id as pid,eor.date as date,ppi.name as name, ppi.patient_phone_number as patient_phone_number,
 eor.time from  patient_billing_details eor, 
 patient_primary_information ppi where eor.patient_id = ppi.id order by eor.time desc");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>patients-details</title>
		
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

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Patients-details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Patient-details</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    
                    <input type="text" id="myInput" onkeyup="searchFun()">
				    <br><br>
					<div><h3>OutPatient-Details</h3></div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id= "myTable" class="table table-striped">
											<thead>
												<tr>
													<th>Patient ID</th>
                                                    <th>Token_ID</th>
													<th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Date</th>
													<th>View Bill</th>
                                                    <th>View Profile</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                                    while($run = mysqli_fetch_assoc($sql))
                                                    {
														$newDate = date("d-m-Y", strtotime($run['date']));  
                                                        echo '<tr>
                                                        <td>'.$run['pid'].'</td>
                                                        <td>'.$run['tid'].'</td>
                                                        <td>'.$run['name'].'</td>
                                                        <td>'.$run['patient_phone_number'].'</td>
                                                        <td>'.$newDate.'</td>
                                                        <td><div class="actions">
														<a href="gbop.php?pid='.$run['pid'].'&tid='.$run['tid'].'&date='.$run['date'].'" class="btn btn-primary">
															<i class="fas fa-eye">VIEW BILL</i>
														</a>
														<td><div class="actions">
														<a href="patient_profile.php?pid='.$run['pid'].'" class="btn btn-primary">
															<i class="fas fa-eye">VIEW PROFILE</i>
														</a>
													    </div></td>
                                                        </tr>';
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div><h3>InPatient-Details</h3></div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id= "myTable" class="table table-striped">
											<thead>
												<tr>
													<th>Patient ID</th>
                                                    <th>Token_ID</th>
													<th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Date</th>
													<th>View Bill</th>
                                                    <th>View Profile</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                                    while($run1 = mysqli_fetch_assoc($sql1))
                                                    {
														$newDate = date("d-m-Y", strtotime($run1['date']));  
                                                        echo '<tr>
                                                        <td>'.$run1['pid'].'</td>
                                                        <td>'.$run1['tid'].'</td>
                                                        <td>'.$run1['name'].'</td>
                                                        <td>'.$run1['patient_phone_number'].'</td>
                                                        <td>'.$newDate.'</td>
                                                        <td><div class="actions">
														<a href="gb.php?pid='.$run1['pid'].'&tid='.$run1['tid'].'" class="btn btn-primary">
															<i class="fas fa-eye">VIEW BILL</i>
														</a>
													  </div><td>
													  <a href="patient_profile.php?pid='.$run1['pid'].'" class="btn btn-primary">
													  <i class="fas fa-eye">VIEW PROFILE</i>
												      </a>
												      </div></td>
                                                        </tr>';
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
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>

        <script>
            const searchFun = () => {
                let filter = document.getElementById('myInput').value.toUpperCase();
                
                let myTable = document.getElementById('myTable');
                
                let tr = myTable.getElementsByTagName('tr');

                for(var i=0;i<tr.length;i++){
                    let td = tr[i].getElementsByTagName('td')[1];
                    let t1 = tr[i].getElementsByTagName('td')[0];
                    let t2 = tr[i].getElementsByTagName('td')[2];
             
                    if(td || t2){
                        let textvlaue = td.textContent || td.innerHTML;
                        let phone = t2.textContent || t2.innerHTML;
                        let pid = t1.textContent || t1.innerHTML;
                        if(textvlaue.toUpperCase().indexOf(filter)>-1 || phone.indexOf(filter)>-1 || pid.toUpperCase().indexOf(filter)>-1){
                            tr[i].style.display = "";
                        }
                        else{
                            tr[i].style.display = "none";
                        }
                    }
                }

            }
        </script>
		
    </body>
</html>