<?php

include 'connect.php';

session_start();

include "check.php";

$pid = $_GET['pid'];
$token_id = $_GET['tid'];

$querys = "select * from fee_charges";
$runs   = mysqli_query($con,$querys);
																

if(isset($_POST['add']))
{
	$qunatity = $_POST['quan'];
	$charge_id = $_POST['charges'];
	$amt = $_POST['tot'];
		
	$insert = "INSERT INTO patient_billing_details (`patient_id`, `charge_id`, `token_id`, `quantity`, `price`) 
			VALUES ('$pid', '$charge_id', '$token_id', '$qunatity', '$amt')";
	$insert2 = mysqli_query($con,$insert);

	echo" <script>document.location='add.php?pid=$pid&tid=$token_id'</script>";

}
if(isset($_POST['save']))
{
	echo" <script>document.location='gb.php?pid=$pid&tid=$token_id'</script>";
}
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
	
		<?php include 'menu.php'; ?>
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<div class="row">
						<div class="col-md-12">
							<div class="card invoices-add-card">
								<div class="card-body">
									<form class="invoices-form" method="post">
										<div class="invoice-item">
											<div class="row">
												<!-- <div class="col-xl-4 col-lg-6 col-md-6">
													<div class="invoice-info">
														<strong class="customer-text">Invoice From <a class="small" href="edit-invoice.html">Edit Address</a></strong>
														<p class="invoice-details invoice-details-two">
															Darren Elder <br>
															806  Twin Willow Lane, Old Forge,<br>
															Newyork, USA <br>
														</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-6 col-md-6">
													<div class="invoice-info">
														<strong class="customer-text">Invoice To</strong>
														<p class="invoice-details invoice-details-two">
															Walter Roberson <br>
															299 Star Trek Drive, Panama City, <br>
															Florida, 32405, USA <br>
														</p>
													</div>
												</div> -->
											</div>
										</div>
										<div class="invoice-add-table">
											<h4>Pre-determined Charges</h4>
											<div class="table-responsive">
												<table class="table table-center add-table-items">
													<thead>
														<tr>
															<th>Charge</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Total</th>
															<th></th>
															<th></th>
                                                            <th></th>
													    </tr>
													</thead>
													<tbody>
														<tr class="add-row">
															<?php
																echo '<td>';
																echo '<select name="charges" id="charges" class="form-control form-select" onchange="get_price();">
																<option value="">Select</option>';
																while($data = mysqli_fetch_assoc($runs))
																{
																	echo '<option value='.$data['charge_id'].'>'.$data['charge_name'].'</option>';
																}
																echo '</select></td>';
															?>
															<td>
																<input type="text" name="prc" id="prc" value=0 oninput="multiply()" class="form-control">
															</td>
															<td>
																<input type="number" min=0 name="quan" value=0 id="quan" oninput="multiply()" class="form-control">
															</td>
															<td>
																<input type="text" name="tot" id="tot" class="form-control">
															</td>
															<td>
																<button type="submit" name="add" class="btn btn-primary">Add Charge</button>
                                                            </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
								<div class="card-header">
									<h5 class="card-title">Charges Added for <?php echo $pid; ?></h5>
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
														$getData = "select fc.charge_name as cn,fc.charge_amount as ca,pbd.quantity as q,pbd.price as p, pbd.time as t
														from patient_billing_details as pbd, fee_charges as fc where pbd.patient_id='$pid' and pbd.token_id='$token_id' 
														and pbd.charge_id = fc.charge_id order by time desc";
														$gen = mysqli_query($con, $getData);
														$i = 0;
														foreach($gen as $data)
														{
															echo 
															'<tr><td>'.++$i.'</td>
															<td>'.$data['cn'].'</td>
															<td>₹'.$data['ca'].'</td>
															<td>'.$data['q'].'</td>
															<td>₹'.$data['p'].'</td>
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