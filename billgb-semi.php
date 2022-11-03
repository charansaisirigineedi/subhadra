<?php

include "connect.php";

session_start();

include "check.php";

$pid = $_GET['pid'];
$tid = $_GET['tid'];
$dat = $_GET['date'];


$sum = 0;

$query = "select name,patient_phone_number,permanent_address from patient_primary_information where id='$pid'";
$run   = mysqli_query($con,$query);
$res   = mysqli_fetch_assoc($run);
$query2= "select doctor_name,date_of_discharge from patient_surgery_form where id='$pid' and token_id='$tid'";
$run2 = mysqli_query($con,$query2);
$res2  = mysqli_fetch_assoc($run2);
$dname=$res2['doctor_name'];
$query3= "SELECT * FROM `doctor details` WHERE dname like '$dname'";
$run3 = mysqli_query($con,$query3);
$res3  = mysqli_fetch_assoc($run3);
$query1 = "select s.charge_name as names,s.quantity as quantity,s.price as price from patient_billing_details as s 
where s.patient_id='$pid' and s.token_id='$tid' and date like '$dat' order by s.price desc";
$run1   = mysqli_query($con,$query1);


function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . '' : '') . $paise;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>IP Semi-Bills</title>
		
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
	<div class="content container-fluid">
	  <div class="row justify-content-center">
						<div class="col-xl-10">
							<div class="card invoice-info-card">
								<div class="card-body">
								<?php include 'letterhead.php'; ?>
					
					<!-- <div class="line"></div> -->
					<hr>
					<h3 style="font-family:Calibri(Body);font-size:30px" align="center"><u><b>IP BILL</b></u></h3><br>
						<!-- Invoice Item -->
							<div class="row">
								<div class="col-md-6">
									<div class="invoice-head">
										<h2>Billed to</h2>
										<p><?php echo $res['name']; ?></p>
										<p><?php echo $res['permanent_address']; ?></p>
										<p><?php echo $res['patient_phone_number']; ?></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="invoice-head">
										<div class="row">
										
										   <div class="col-md-4"> </div>
										   <div class="col-md-4"> <h2>INVOICE</h2></div>
										   <div class="col-md-4"> </div>
											
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4"><p>Invoice Number  : </p></div>
											<div class="col-md-4"><p><b> INV<?php echo $tid; ?></b></p></div>
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4"><p>INPatient Number  : </p></div>
											<div class="col-md-4"><p><b> <?php echo $pid; ?></b></p></div>
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4"><p>Date :</p></div>
											<div class="col-md-4"><p><b>
										<?php 
											if(empty($res2['date_of_discharge']))
											 {
												echo $d;
											}
											else 
											{
												$newDate = date("d-m-Y", strtotime($res2['date_of_discharge']));
												echo $newDate;
											}
										?></b></p></div>
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4"><p>Consultant Doctor: </p></div>
											<div class="col-md-4"><p><b> <?php echo $dname; ?></b></p></div>
										</div>
								
									</div></div>
							

							</div>
						
					
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
																<td>'.$quantity.' X '.$price/$quantity.'/-</td>
																<td align="center">'.$price.'/-</td>
															</tr>';
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
										
										<div class="col-lg-6 col-md-6">
											<div class="invoice-total-card">
												<div class="invoice-total-box">
													
													<div class="invoice-total-footer">
														<h4>Total Amount <span><?php echo $sum; ?> /-</span></h4>
													</div>
												</div>
											</div><br>
										</div>

										<div ><tr><h2 class="invoice-name" style="font-family:Calibri(Body);"><b>Amount in words : Rupees <?php echo ucwords(getIndianCurrency($sum)); ?> Only</b></h2></div>
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