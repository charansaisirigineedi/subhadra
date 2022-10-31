<?php

include 'connect.php';

session_start();

include "check.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Books</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Feather CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<script>
			
			const dataT = {};
			<?php 
				$get = "select charge_id as ci,charge_amount as ca from fee_charges";
				$run = mysqli_query($con, $get);
				while($get = mysqli_fetch_array($run))
				{
					echo 'dataT.'.$get['ci'].'= '.$get['ca'].'; ';
				}
			?>
		</script>		
	</head>
	<body>
	
	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
					<div class="card">
								<div class="card-header">
									<h5 class="card-title">Patient Data</h5>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Charge Name</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Amount</th>
													<th>Time</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php
													if(true)
													{
														$getData = "select ";
														$gen = mysqli_query($con, $getData);
														$i = 0;
														foreach($gen as $data)
														{
															echo 
															'<tr><td>'.++$i.'</td>
															<td>'.$data['cn'].'</td>
															<td>'.$data['ca'].'</td>
															<td>'.$data['q'].'</td>
															<td>'.$data['p'].'</td>
															<td>'.$data['t'].'</td>
															<td><button type="submit" class="btn btn-primary"><a href="delete.php?time='.$data['t'].'&pid='.$pid.'&tid='.$token_id.'">Delete</a></button><td></tr>';
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
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>
  		
		function get_price()
		 {
			var type=document.getElementById('charges').value;
		   	document.getElementById('prc').value=dataT[type];
		 }

		 function multiply() 
		 { 
			const multiplicand = document.getElementById('prc').value || 0; 
			const multiplier = document.getElementById('quan').value || 0; 
			const product = parseInt(multiplicand) * parseInt(multiplier); 
			document.getElementById('tot').value = product; 
		}

		</script>

	</body>
</html>