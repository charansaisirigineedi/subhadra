<?php

include 'connect.php';

session_start();

include "check.php";

$pid = $_GET['pid'];
$tid = $_GET['tid'];
$name=$_GET['name'];
$query = "SELECT `id`, `token_id`, `date_of_admission`, `time_of_admisssion`, `date_of_discharge`, `time_of_discharge`,
 `admission_room_type`, `no_of_days_of_stay`, `doctor_name`, `anesthetist_name`, `tod`, `nursing_staff`, `time`
  FROM `patient_surgery_form` WHERE id='$pid' and token_id='$tid' ";
$run = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run);

$query1 = "SELECT `id`, `token_id`, `mother_age_at_time_of_marriage`, `mother_age_at_time_of_delivery`, 
`type_of_delivery`, `number_of_kids_including_this`, `no.of.weeks`, `gender`, `weight`,
 `time` FROM `patient_pregnancy_information` WHERE id='$pid' and token_id='$tid' ";
 $run1= mysqli_query($con, $query1);
 $res1 = mysqli_fetch_assoc($run1);

if (isset($_POST['submit'])) {
    $date_admit = $_POST['dt_admit'];
    $time_admit = $_POST['t_admit'];
    $date_dicharge = $_POST['d_discharge'];
    $time_discharge = $_POST['t_discharge'];
    $room_type = $_POST['roomtype'];
    $nds = $_POST['nds'];
    $tod = $_POST['td'];
    $d_name = $_POST['d_name']; 
    $A_name = $_POST['A_name'];
    $N_staff = $_POST['N_staff'];


    $mam = $_POST['mam'];
	$mad = $_POST['mad'];
	$td = $_POST['td'];
	$tk = $_POST['tk'];
	$now=$_POST['now'];
	$gen=$_POST['gender'];
	$wb=$_POST['wb'];
    $surgery= "UPDATE `patient_surgery_form` SET `id`='$pid',`token_id`='$tid',
	`date_of_admission`='$date_admit',`time_of_admisssion`='$time_admit',`date_of_discharge`='$date_dicharge',
	`time_of_discharge`='$time_discharge',`admission_room_type`='$room_type ',`no_of_days_of_stay`='$nds',`doctor_name`='$d_name',
	`anesthetist_name`='$A_name',`tod`='$tod',
	`nursing_staff`='$N_staff' WHERE id='$pid' and token_id='$tid'";

    $ru = mysqli_query($con, $surgery) or die(mysqli_error());
    $qu1 = "UPDATE `patient_pregnancy_information` SET `id`='$pid',`token_id`='$tid',
    `mother_age_at_time_of_marriage`=' $mam',`mother_age_at_time_of_delivery`='$mad',
    `type_of_delivery`='$td',`number_of_kids_including_this`='$tk',
    `no.of.weeks`='$now',`gender`='$gen',`weight`='$wb' WHERE id='$pid' and token_id='$tid' ";
    $ru1 = mysqli_query($con, $qu1) or die(mysqli_error());

echo" <script>document.location='search-upf.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>IN PATIENT PRENANCY SURGERY FORM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Fontfamily -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">UPDATE PATIENT DETAILS - <?php echo $name;?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">UPDATE PATIENT DETAILS</li>
								</ul>
							</div>
						</div>
					</div> 	    
            <!-- /Page Header -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
									<h5 class="card-title">Two Column Vertical Form</h5>
								</div> -->
                        <div class="card-body">
                            <form method="post" autocomplete="off" class="needs-validation" novalidate>
                                <!-- <h5 class="card-title">Personal Information</h5> -->
                                <form method="post" autocomplete="off" class="needs-validation"novalidate>
										<!-- <h5 class="card-title">Personal Information</h5> -->
										<div class="row">
											<div class="col-md-6">
                                                <div class="form-group">
										            <label>Patient ID</label>
										            <input type="text" name="pid" class="form-control" disabled="disabled" value=<?php echo  $pid;?>>
												</div>
												<div class="form-group">
										            <label>Date of Admission</label>
										            <input type="date" class="form-control" value="<?php  echo $res['date_of_admission']; ?>" name="dt_admit" palceholder="Enter Date" required>
													<div class="invalid-feedback">
														Please choose "Date of Admission"
                                                     </div>
									            </div>
                                                <div class="form-group">
										            <label>Time of Admission</label>
										            <input type="time" class="form-control" value="<?php  echo $res['time_of_admisssion']; ?>" name="t_admit" palceholder="Enter Time"required>
													<div class="invalid-feedback">
														Please choose "Time of Admission"
                                                    </div>
									            </div>
												<div class="form-group">
										            <label>Date  of Discharge</label>
										            <input type="date" class="form-control" value="<?php  echo $res['date_of_discharge']; ?>"  name="d_discharge"required>
													<div class="invalid-feedback">
														Please choose "Date  of Discharge"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label>Time of Discharge</label>
										            <input type="time" class="form-control" value="<?php  echo $res['time_of_discharge']; ?>" name="t_discharge"required>
													<div class="invalid-feedback">
														Please choose "Time of Discharge"
                                                    </div>
									            </div>
                                                <div class="form-group">
										            <label >Admission Room Type</label>
										            <select  name ='roomtype' class="form-control"required>
													<option value="AC" <?php if( $res['admission_room_type']=='AC' ){echo "selected";}?>>AC</option>
													<option value="NON-AC" <?php if( $res['admission_room_type']=='NON-AC' ){echo "selected";}?>>NON-AC</option>

											            <option value=AC>AC</option>
											            <option value=NON-AC>Non-AC</option>
                                                    </select>
													<div class="invalid-feedback">
														Please choose "Admission Room Type"
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
										            <label>Token ID</label>
										            <input type="text" name="tid" class="form-control"  value="<?php  echo $tid;?>" disabled="disabled" value=<?php echo  $tid;?>>
												</div>
                                                <div class="form-group">
										            <label>No. of Days of stay:</label>
										            <input type="number" class="form-control"  value="<?php  echo $res['no_of_days_of_stay']; ?>" name="nds"required>
													<div class="invalid-feedback">
														Please choose "No. of Days of stay"
                                                    </div>
									            </div>
                                                <div class="form-group">
                                                    <label>Doctor Name:</label>
                                                    <select name='d_name' class="form-control"required>
													<option value="Dr.Sree Ramys Amulya.V" <?php if( $res['doctor_name']=='Dr.Sree Ramys Amulya.V' ){echo "selected";}?>>Dr.Sree Ramys Amulya.V</option>
													<option value="Dr.Subhashini.V" <?php if( $res['doctor_name']=='Dr.Subhashini.V' ){echo "selected";}?>>Dr.Subhashini.V</option>

                                                    </select>
													<div class="invalid-feedback">
														Please choose "Doctor Name"
                                                     </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Anesthetian Name(if any)</label>
                                                    <textarea class="form-control"  name="A_name"required><?php  echo $res['anesthetist_name']; ?></textarea>
													<!-- <input list="charges" name="A_name" id="A_name" class="form-control">
													<datalist id="charges">
													
                                                        <option value="Dr.Anand">
                                                        <option value="Dr.Rama Krishna">
                                                        <option value="Dr.Bhanu" >
                                                        <option value="Dr.Anil">
                                                    </datalist> -->
                                                </div>												
                                                <div class="form-group">
											        <label>Type of Pregnancy</label>
											        <div>
												        <select name="td" class="form-control form-select"required>
                                                        <option value="Normal" <?php if( $res['tod']=='Normal' ){echo "selected";}?>>Normal</option>
                                                        <option value="LSCS" <?php if( $res['tod']=='LSCS' ){echo "selected";}?>>LSCS</option>
                                                        </select>

													   
												        </select>
													</div>
													<div class="invalid-feedback">
														Please choose "Type of Pregnancy"
                                                    </div>
										        </div>
                                                <div class="form-group">
										            <label>Nursing  Staff</label>
										            <textarea class="form-control"  name="N_staff"required><?php  echo $res['nursing_staff']; ?></textarea>
													<div class="invalid-feedback">
														Please choose "Nursing  Staff"
                                                    </div>
									            </div>
											</div>
										</div>
                                                
									    </div>
										</div>
									 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mother Age at the Time of Marriage</label>
                                <input type="number" value="<?php  echo $res1['mother_age_at_time_of_marriage']; ?>" name="mam" min=0 class="form-control" required>
                                <div class="invalid-feedback">
                                    Please choose "Mother Age at the Time of Marriage"
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mother Age at the Time of Delivery</label>
                                <input type="number"  value="<?php  echo $res1['mother_age_at_time_of_delivery']; ?>" name="mad" min=0 class="form-control" required>
                                <div class="invalid-feedback">
                                    Please choose "Mother Age at the Time of Delivery"
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type of Delivery</label>
                                <div>
                                    <select name="td" class="form-control form-select" required>
                                    <option value="Normal" <?php if( $res1['type_of_delivery']=='Normal' ){echo "selected";}?>>Normal</option>
                                    <option value="LSCS" <?php if( $res1['type_of_delivery']=='LSCS' ){echo "selected";}?>>LSCS</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    Please choose "Type of Delivery"
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Number of Kids Including This</label>
                                <input type="number" min=0  value="<?php  echo $res1['number_of_kids_including_this']; ?>" name="tk" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please choose "Number of Kids Including This"
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="card-title">NEW BORN BABY DETAILS</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Number Of weeks</label>
                                <input type="number"  value="<?php  echo $res1['no.of.weeks']; ?>"  name="now" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please choose "Number of weeks"
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Weight of the Baby</label>
                                <input type="number"  value="<?php  echo $res1['weight']; ?>" name="wb" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please choose "Weight of the baby"
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Gender:</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if( $res1['gender']=='M' ){echo "checked";}?> type="radio" name="gender" value="M">
                                    <label class="form-check-label" for="gender_male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if( $res1['gender']=='F' ){echo "checked";}?> type="radio" name="gender"  value="F" >
                                    <label class="form-check-label" for="gender_female">Female</label>
                                </div>
                                <div class="invalid-feedback">
                                    Please choose "Gender"
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
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

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    <!-- Form Validation JS -->
    <script src="assets/js/form-validation.js"></script>
</body>

</html>