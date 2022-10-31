<?php

include 'connect.php';

session_start();

include "check.php";

$pid = $_GET['pid'];
$token_id = $_GET['tid'];

date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);

$querys = "select * from fee_charges";
$runs   = mysqli_query($con,$querys);
																
$queryf="SELECT  `name`  FROM `patient_primary_information` WHERE id = '$pid'";
$runf   = mysqli_query($con,$queryf);
$rund = mysqli_fetch_assoc($runf);
if(isset($_POST['ouadd']))
{
	$qunatity = $_POST['quan'];
    $name = $_POST['charge'];
	$amt = $_POST['tot'];
	$dat = $_POST['dat'];
	
    $cook = "select charge_id from fee_charges where charge_name='$name'";
    $runn = mysqli_query($con,$cook);
    $cook = mysqli_fetch_assoc($runn);

    if(!empty($cook))
    {
        $charge_id = $cook['charge_id'];
    }
    else
    {
        $charge_id = "CH029";
    }

	$insert = "INSERT INTO  out_patient_billing_details (`patient_id`, `charge_id`, `charge_name`,`token_id`, `quantity`, `price`, `date`) 
			VALUES ('$pid', '$charge_id','$name','$token_id', '$qunatity', '$amt','$dat')";
	$insert2 = mysqli_query($con,$insert);

	echo" <script>document.location='bop.php?pid=$pid&tid=$token_id'</script>";

}

if(isset($_POST['finish']))
{
	echo "<script>document.location='dashboard.php'</script>";
}
if(isset($_POST['view-bill']))
{
	$que="select date from out_patient_billing_details
    where patient_id='$pid' and token_id='$token_id' order by time desc";
    $qu = mysqli_query($con,$que);
	$qu1=mysqli_fetch_assoc($qu);
	if($qu1)
	 {
		$dd=$qu1['date'];
	    echo" <script>document.location='gbop.php?pid=$pid&tid=$token_id'</script>";
	 }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ADD OP BILLS</title>
		
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
            const dataF = {};
			<?php 
				$get = "select charge_id as ci,charge_name as cn,charge_amount as ca from fee_charges";
				$run = mysqli_query($con, $get);
				while($get = mysqli_fetch_array($run))
				{
					echo 'dataT.'.$get['ci'].'= '.$get['ca'].'; ';
                    echo 'dataF.'.$get['ci'].'= "'.$get['cn'].'"; ';
				}
			?>
		</script>		
	</head>
	<body>

	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
				<div class="row">
					<div class="col">
						<h3 class="page-title"><b>Charges Adding For :</b> <?php echo strtoupper($rund['name']);?></h3>  
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Adding Charges</li>
						</ul>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card invoices-add-card">
								<div class="card-body">
									<form class="invoices-form" method="post">
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
															<th>Date</th>
															<th></th>
													    </tr>
													</thead>
													<tbody>
														<tr class="add-row">
                                                            <td>
                                                            <!-- <label for="browser">Choose your browser from the list:</label> -->
                                                            <input list="charges" name="charge" id="charge" class="form-control" onchange="get_price();">

                                                                <datalist id="charges">
                                                                    <?php
                                                                        $run = "select charge_id,charge_name from fee_charges";
                                                                        $get = mysqli_query($con, $run);
                                                                        while($da = mysqli_fetch_array($get))
                                                                        {
                                                                            echo '<option id='.$da['charge_id'].' value="'.$da['charge_name'].'">';
                                                                        }
                                                                    ?>
                                                                </datalist>
                                                            </td>
															<td>
																<input type="text" name="prc" id="prc" value=0 oninput="multiply()" class="form-control">
															</td>
															<td>
																<input type="number" min=1 name="quan" value=1 id="quan" oninput="multiply()" class="form-control">
															</td>
															<td>
																<input type="text" name="tot" id="tot" class="form-control">
															</td>
															<td>
																<input type="date" value="<?php echo $d; ?>" name="dat" id="dat" class="form-control">
															</td>
															<td>
																<button type="submit" name="ouadd" class="btn btn-primary">Add Charge</button>
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
					<div class="text-end">
						<form method="post">
							<button type="submit" name="finish" class="btn btn-primary">Finish</button>										
						</form>
					</div>
					<div>
					  <form method="post">
					      <button type="submit" name="view-bill" class="btn btn-primary">View Bill</button>	
						</form>									
					</div>
					<br>
					<div class="card">
								<div class="card-header">
									<h5 class="card-title">Charges Added for <?php echo $rund['name']; ?></h5>
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
													<th>Date</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php
													if(true)
													{
														$getData = "select charge_name,quantity, price, date, time from out_patient_billing_details where patient_id='$pid' and token_id='$token_id' order by date desc";
														$gen = mysqli_query($con, $getData);
														$i = 0;
														foreach($gen as $data)
														{
   														   $newDate = date("d-m-Y", strtotime($data['date']));  
                                                            $pp = $data['price'] / $data['quantity'];
															echo 
															'<tr><td>'.++$i.'</td>
															<td>'.$data['charge_name'].'</td>
															<td>'.$pp.'</td>
															<td>'.$data['quantity'].'</td>
															<td>'.$data['price'].'</td>
															<td>'.$newDate.'</td>
															<td><a href="oudelete.php?time='.$data['time'].'&pid='.$pid.'&tid='.$token_id.'"><button type="submit" class="btn btn-primary">Delete</button></a></td></tr>';
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

        function getKeyByValue(object, value)
        {
            return Object.keys(object).find(key => object[key] === value);
        }
  		
		function get_price()
		 {
			var type=document.getElementById('charge').value;
            var type=getKeyByValue(dataF,type);
		   	if(type)
            {
                document.getElementById('prc').value=dataT[type];
                document.getElementById('tot').value=dataT[type];

            }
            else
            {
                document.getElementById('prc').value=0;
                document.getElementById('tot').value=0;

            }
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