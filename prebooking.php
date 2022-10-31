<?php

include 'connect.php';

session_start();

date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);

if(isset($_POST['ouadd']))
{
	$name = $_POST['name'];
    $mobile = $_POST['mobile'];
	$mobile1=(int)$mobile;
	$reason = $_POST['reason'];
	$time=$_POST['time'];
	$dat = $_POST['dat'];	
	$insert2 = "INSERT INTO `prebooking`(`Name`, `Date`, `time`, `Mobile`, `Reason`) VALUES ('$name','$dat','$time','$mobile1','$reason')";
	$insert = mysqli_query($con, $insert2);
	echo" <script>document.location='prebooking.php'</script>";

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
	</head>
	<body>

	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
				<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title"><b>Pre-Booking:</b></h3>  
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">pre-booking</li>
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
											<h4>Pre-Booking</h4>
											<div class="table-responsive">
												<table class="table table-center add-table-items">
													<thead>
														<tr>
															<th>Name</th>
															<th>Date</th>
															<th>Time</th>
															<th>Mobile No.</th>
															<th>Reason</th>
														
															<th></th>
													    </tr>
													</thead>
													<tbody>
														<tr class="add-row">
                                                            <td>
                                                            <input type="text" name="name" id="name" class="form-control">
                                                            </td>
                                                            <td>
																<input type="date" value="<?php echo $d;?>"  name="dat" id="dat" class="form-control">
															</td>
															<td>
																<input type="time"  name="time" placeholder = "time" id="time" class="form-control">
															</td>
															<td>
															<input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength=10 name="mobile" class="form-control"required>
															</td>
                                                            
															<td>
																<input type="text"  name="reason" placeholder = "Reason" id="Reason" class="form-control">
															</td>
															
															
															<td>
																<button type="submit" name="ouadd" class="btn btn-primary">Book</button>
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
									<h5 class="card-title">Booking Details</h5>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Name</th>
													<th>Date</th>
													<th>Time</th>
													<th>Mobile</th>
													<th>Reason</th>
												</tr>
											</thead>
											<tbody>
												<?php
													if(true)
													{
														$query="SELECT `Name`, `Date`, `time`,`Mobile`, `Reason` FROM `prebooking` order by `time`";
														$gen=mysqli_query($con,$query);
														$i = 0;
														foreach($gen as $data)
														{
															$newDate = date("d-m-Y", strtotime($data['Date']));  
															echo 
															'<tr><td>'.++$i.'</td>
															<td>'.$data['Name'].'</td>
															<td>'.$newDate.'</td>
															<td>'.$data['time'].'</td>
															<td>'.$data['Mobile'].'</td>
															<td>'.$data['Reason'].'</td>
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
