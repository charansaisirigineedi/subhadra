<?php

include "connect.php";
session_start();

include "check.php";

$pid = $_GET['pid'];
$tid = $_GET['tid'];
$date = $_GET['date'];


$sum = 0;

$query = "select name,patient_phone_number,permanent_address from patient_primary_information where id='$pid'";
$run   = mysqli_query($con,$query);
$res   = mysqli_fetch_assoc($run);

$query1 = "select s.date as date ,s.charge_name as names,s.quantity as quantity,s.price as price from out_patient_billing_details as s 
where s.patient_id='$pid' and s.token_id='$tid' and date like '$date'  order by s.price desc";
$run1   = mysqli_query($con,$query1);
$res1   = mysqli_fetch_assoc($run);

echo"<script>setTimeout(myFunction,3000);</script>";
  
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>OP BILLS</title>
		
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
		
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

<body>

				<div class="content container-fluid">
					<!-- <form>
						<button id="cmd">generate PDF</button>
					</from> -->
					<div class="row justify-content-center">
						<div class="col-xl-10">
							<div class="card invoice-info-card">
								<div class="card-body">
									<div class="invoice-item invoice-item-one">
										<div class="row">
											<div class="col-md-6">
												<div class="invoice-logo">
													<img src="assets/img/logo.png" alt="logo">
												</div>
												<div class="invoice-head">
													<h2>Invoice</h2>
													<p>Invoice Number : In<?php echo $tid; ?></p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="invoice-info">
													<strong class="customer-text-one">Invoice From</strong>
													<h6 class="invoice-name">Subhadra Hospitals</h6>
													<p class="invoice-details">
														9087484288 <br>
														SRKR Marg, Balusumoodi<br>
														534202 ,Bhimavaram - India
													</p>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Invoice Item -->
									<div class="invoice-item invoice-item-two">
										<div class="row">
											<div class="col-md-6">
												<div class="invoice-info">
													<strong class="customer-text-one">Billed to</strong>
													<h6 class="invoice-name"><?php echo $res['name']; ?></h6>
													<p class="invoice-details invoice-details-two">
													<?php echo $res['patient_phone_number']; ?> <br>
													<?php echo $res['permanent_address']; ?>													</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="invoice-info invoice-info2">
													<strong class="customer-text-one">Consultant Doctor</strong>
													<p class="invoice-details">
													Dr.M Subhadra<br>
														Obstetrician - Gynecologist <br>
														Subhadra Hospital
													</p>
													<!-- <div class="invoice-item-box">
														<p>Recurring : 15 Months</p>
														<p class="mb-0">PO Number : 54515454</p>
													</div> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /Invoice Item -->
									
									<!-- Invoice Item -->
									<!-- <div class="invoice-issues-box">
										<div class="row">
											<div class="col-lg-4 col-md-4">
												<div class="invoice-issues-date">
													<p>Issue Date : 27 Jul 2022</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="invoice-issues-date">
													<p>Admission Date : 27 Aug 2022</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="invoice-issues-date">
													<p>Discharge Date : ₹ 1,54,22 </p>
												</div>
											</div>
										</div>
									</div> -->
									<!-- /Invoice Item -->

									<!-- Invoice Item -->
									<div class="invoice-item invoice-table-wrap">
										<div class="row">
											
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="invoice-table table table-center mb-0">
														<thead>
															<tr>
                                                                <th>Sl No.</th>
																<th>Description</th>
																<th>Quantity</th>
																<th>Amount</th>
																<th>Date</th>
															</tr>
														</thead>
														<tbody>
														<!-- select f.charge_name as name,s.quantity as quantity,s.price -->
														<?php
															$i = 0;
															foreach($run1 as $data) 
															{
																$i++;
																$name = $data['names'];
																$quantity=$data['quantity'];
																$price=$data['price'];
																$sum = $sum + $price;
																echo
															'<tr>
															<td>'.$i.'</td>
															<td>'.$name.'</td>
															<td>'.$quantity.'</td>
															<td>'.$price.'</td>
															<td>'.$data['date'].'</td>
															<td ></tr>';
															}
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- /Invoice Item -->

									<div class="row align-items-center justify-content-center">
										<!-- <div class="col-lg-6 col-md-6">
											<div class="invoice-terms">
												<h6>Notes:</h6>
												<p class="mb-0">Enter customer notes or any other details</p>
											</div>
											<div class="invoice-terms">
												<h6>Terms and Conditions:</h6>
												<p class="mb-0">Enter customer notes or any other details</p>
											</div>
										</div> -->
										<div class="col-lg-6 col-md-6">
											<div class="invoice-total-card">
												<div class="invoice-total-box">
													<div class="invoice-total-inner">
														<!-- <p>Taxable <span>$6,660.00</span></p>
														<p>Additional Charges <span>$6,660.00</span></p> -->
														<!-- <p>Discount <span>$00.00</span></p> -->
														<p class="mb-0">Sub total <span>₹<?php echo $sum; ?></span></p>
													</div>
													<div class="invoice-total-footer">
														<h4>Total Amount <span>₹<?php echo $sum; ?></span></h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					setTimeout("print()", 1000);
				</script>