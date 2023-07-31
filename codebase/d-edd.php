<?php

include 'connect.php';

session_start();
include "check.php";
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))
{
	$month = $_POST['mon'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Inpatient List</title>
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
	<div class="main-wrapper"> <?php include 'menu2.php'; ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Filters</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Filters</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<form method="post">
					<div class="row">
						<div class="col-md-4">
							<select id='mon' name="mon" class="form-control">
								<option selected value=''>--Select Month--</option>
								<option value='January'>January</option>
								<option value='February'>February</option>
								<option value='March'>March</option>
								<option value='April'>April</option>
								<option value='May'>May</option>
								<option value='June'>June</option>
								<option value='July'>July</option>
								<option value='August'>August</option>
								<option value='September'>September</option>
								<option value='October'>October</option>
								<option value='November'>November</option>
								<option value='December'>December</option>
							</select>
						</div>
						<div class="col-md-4">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
						<div class="col-md-2">
							<input type="button" value="Download Pdf" id="pdf" onclick="Export()" class="btn btn-primary">
						</div>
					</div>
				</form>
				<br>
				<div id="myTable" class="row">
					<h3 align="center" class="page-title"><?php echo $month; ?> Expected patient Delivery List</h3>
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Patient ID</th>
												<th>EDD</th>
												<th>LMP</th>
												<th>POG</th>
												<th>Formula</th>
												<th>High Risk Pregnancy</th>
											</tr>
										</thead>
										<tbody> <?php
                                                    if(isset($_POST['submit']))
													{
														$month = $_POST['mon'];
														$sql = mysqli_query($con,"SELECT id as pi,name ,patient_phone_number as ppn,
														edd,lmp,pog from patient_primary_information where monthname(edd)='$month'
														order by edd asc");
														

														while($run = mysqli_fetch_assoc($sql))
														{
															$id=$run['pi'];
															$sql1=mysqli_query($con,"SELECT g,l,p,a,d,high_risk_pregnancy as hrp from pastrecords where patient_id='$id'");
															$data = mysqli_fetch_assoc($sql1);
															$newDate = date("d-m-Y", strtotime($run['edd']));  
															$edd = strval($newDate);
															$newDate = date("d-m-Y", strtotime($run['pog']));  
															$pog = strval($newDate);
															$newDate = date("d-m-Y", strtotime($run['lmp']));  
															$lmp = strval($newDate);
															if($data['hrp'])
															{
															echo '<tr>
															
															<td>'.$run['name'].'</td> 
															<td>'.$run['ppn'].'</td>
															<td>'.$id.'</td>
															<td>'.$edd.'</td>
															<td>'.$lmp.'</td>
															<td>'.$pog.'</td>
															<td>'.'G<sub><b>'.$data['g'].'</b></sub>'.'L<sub><b>'.$data['l'].'</b></sub>'.'P<sub><b>'.$data['p'].'</b></sub>'.'A<sub><b>'.$data['a'].'</b></sub>'.'D<sub><b>'.$data['d'].'</b></sub>'.'</td>
														    <td><button class="btn btn-danger">'.$data['hrp'].'</button></td></tr>';
															}
															else
															{
																echo '<tr>
																<td>'.$edd.'</td>
																<td>'.$lmp.'</td>
																<td>'.$pog.'</td>
																<td>'.$run['name'].'</td> 
																<td>'.$run['ppn'].'</td>
																<td>'.$id.'</td>
																<td>'.'G<sub><b>'.$data['g'].'</b></sub>'.'L<sub><b>'.$data['l'].'</b></sub>'.'P<sub><b>'.$data['p'].'</b></sub>'.'A<sub><b>'.$data['a'].'</b></sub>'.'D<sub><b>'.$data['d'].'</b></sub>'.'</td>
														    	<td>'.$data['hrp'].'</button></td></tr>';
														}	
														}
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script>
	function generate() {
		var doc = new jsPDF("p", "pt", "a4", true);
		var a4Width = Number(doc.internal.pageSize.getWidth());
		doc.fromHTML($("#dataID").html(), 20, 0, {
			pagesplit: true,
			"width": (a4Width - 40) // for margin right
		}, function(dispose) {
			doc.save("PHPLift.pdf");
		});
	}
	</script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<script type="text/javascript">
	function Export() {
		html2canvas(document.getElementById('myTable'), {
			onrendered: function(canvas) {
				var data = canvas.toDataURL({
					pixelRatio: 100
				});
				var docDefinition = {
					content: [{
						image: data,
						width: 500,
						scale: 5
					}]
				};
				pdfMake.createPdf(docDefinition).download("edd.pdf");
			}
		});
	}
	</script>
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