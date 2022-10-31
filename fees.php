<?php
include 'connect.php';
session_start();

include "check.php";

if(isset($_POST['add']))
{
    $cid= $_POST['charge'];
    $cn= $_POST['name'];
	$ca= $_POST['amt'];
	$insert = "INSERT INTO `fee_charges`(`charge_id`, `charge_name`, `charge_amount`)
     VALUES ('$cid','$cn','$ca')";
	$insert2 = mysqli_query($con,$insert);
	if($insert2)
	{
		echo" <script>alert('added successfully');</script>";
		echo" <script>document.location='fees.php';</script>";
       
	}
    else{
		
		echo" <script>alert('not added successfully');</script>";
        echo" <script>document.location='fees.php';</script>";
        
    }
}
if(isset($_POST['delete']))
{
    $cid= $_POST['charge'];
	$delete = "DELETE FROM `fee_charges` WHERE `charge_id`='$cid'";
	$delete2 = mysqli_query($con,$delete);
	if($delete2)
	{
		echo" <script>alert('deleted successfully');</script>";
		echo" <script>document.location='fees.php';</script>";
        }
    else{
		echo" <script>alert('not deleted');</script>";
        echo" <script>document.location='fees.php';</script>";
    }
}
if(isset($_POST['update']))
{
    $cid= $_POST['charge'];
    $cn= $_POST['name'];
	$ca= $_POST['amt'];
	$update = "UPDATE `fee_charges`
	 SET `charge_id`='$cid', `charge_name` ='$cn', `charge_amount` ='$ca' WHERE `charge_id`='$cid'";
	$update2 = mysqli_query($con,$update);
	if($update2)
	{
		echo" <script>alert('updated successfully');</script>";
		echo" <script>document.location='fees.php';</script>";
    }
    else{
		echo" <script>alert('not updated');</script>";
        echo" <script>document.location='fees.php';</script>";
    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>FEES UPDATE</title>
		
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
                    echo  'dataT.'.$get['ci'].'= "'.$get['ca'].'"; ';
                    echo  'dataF.'.$get['ci'].'= "'.$get['cn'].'"; ';
                }
            ?>
		</script>	
	</head>
	<body>
	
	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
					<form method="post" clas="form-control">
					<div class="row">
						<div class="col-md-12">
							<div class="invoice-add-table">
											<h4>Item Details</h4>
											<div class="table-responsive">
												<table class="table table-center add-table-items">
													<thead>
														<tr>
															<th>Charge_Id</th>
                                                            <th>charge_name</th>
                                                            <th>Price</th>
													    </tr>
													</thead>
													<tbody>
														<tr class="add-row">

															<td>
																<input type="text" name="charge" id="prc1"  class="form-control" onchange="get_price();">
															</td>
                                                            <td>
																<input type="text" name="name" id="prc2"  class="form-control">
															</td>
                                                            <td>
																<input type="text" name="amt"  id="prc3" class="form-control">
															</td>
															<td>
															   <button type="submit" name="add" class="btn btn-primary">Add</button>
                                                            </td> 
                                                            <td>
																<button type="submit" name="update" class="btn btn-primary">Update</button>
                                                            </td> 
                                                            <td>
																<button type="submit" name="delete" class="btn btn-primary">Delete</button>
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
			var type=document.getElementById('prc1').value;
		   	if(dataT[type])
            {
                document.getElementById('prc3').value=dataT[type];
                document.getElementById('prc2').value=dataF[type];

            }
            else
            {   
                document.getElementById('prc3').value=0;
                document.getElementById('prc2').value=" ";
            }
		 }
        </script>

	</body>
</html>