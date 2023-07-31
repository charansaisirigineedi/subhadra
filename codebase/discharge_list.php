<?php

include 'connect.php';
session_start();
include "check.php";
$sql = mysqli_query($con,"SELECT eor.token_id  as token_id,eor.id as id,eor.time as date, 
ppi.name as name, ppi.patient_phone_number as patient_phone_number from patient_pregnancy_information eor,
patient_primary_information ppi where eor.id = ppi.id and eor.token_id not in (select tid from patient_discharge_form) order by eor.time desc");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Discharge List</title>
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
	<div class="main-wrapper"> <?php include 'menu.php'; ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">PREGNANCY DISHCHARGE LIST</h3>
							<div class="col-md-9">
								<ul class="list-links mb-4">
									<li class="active"><a href="discharge_list.php">Pregnancy Patients List</a></li>
									<li><a href="sdischarge_list.php">Surgery Patients List</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<form>
							<input type="text" id="myInput" onkeyup="searchFun()" class="form-control"><br>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="myTable" class="table table-striped">
										<thead>
											<tr>
												<th>Patient ID</th>
												<th>TOKEN ID</th>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Pregnancy Discharge Form</th>
											</tr>
										</thead>
										<tbody> <?php
                                                    while($run = mysqli_fetch_assoc($sql))
                                                    {
                                                        echo '<tr>
                                                        <td>'.$run['id'].'</td>
														<td>'.$run['token_id'].'</td>
                                                        <td>'.$run['name'].'</td>
                                                        <td>'.$run['patient_phone_number'].'</td>
                                                        <td><a href="discharge_summary_sub.php?pid='.$run['id'].'&tid='.$run['token_id'].'" class="btn btn-primary">
														Pregnancy Discharge Summary
													    </a><td>
                                                        </tr>';
                                                    }
                                                ?> </tbody>
									</table>
								</div>
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
	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<script>
	const searchFun = () => {
		let filter = document.getElementById('myInput').value.toUpperCase();
		let myTable = document.getElementById('myTable');
		let tr = myTable.getElementsByTagName('tr');
		for(var i = 0; i < tr.length; i++) {
			let td = tr[i].getElementsByTagName('td')[1];
			let t1 = tr[i].getElementsByTagName('td')[0];
			let t2 = tr[i].getElementsByTagName('td')[2];
			if(td || t2) {
				let textvlaue = td.textContent || td.innerHTML;
				let phone = t2.textContent || t2.innerHTML;
				let pid = t1.textContent || t1.innerHTML;
				if(textvlaue.toUpperCase().indexOf(filter) > -1 || phone.indexOf(filter) > -1 || pid.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
	</script>
</body>

</html>