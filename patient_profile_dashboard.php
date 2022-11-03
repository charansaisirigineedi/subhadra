<?php
include "connect.php";
session_start();

include "check.php";
$pid = $_GET['pid'];
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set("Asia/Kolkata");
$mon = date('F');

$query1    = "SELECT  name,edd,pog,lmp,date  from patient_primary_information where `id` = '$pid'";
$run1      = mysqli_query($con, $query1);
$na = mysqli_fetch_assoc($run1);

$query2   = "SELECT token_id,date from existing_op_record where `id` = '$pid' order by date";
$run2     = mysqli_query($con, $query2);

$quer   = "SELECT ps.date_of_admission as doa,ps.date_of_discharge as dod,ps.token_id as tid,pi.type_of_inpatient as tip FROM
 `patient_surgery_form` ps,patient_inpatient_form pi WHERE ps.id='$pid' and pi.token_id=ps.token_id;";
$ru      = mysqli_query($con, $quer);

$query    = "select count(id) as nv from existing_op_record where id='$pid' ";
$r   = mysqli_query($con, $query);
$nv = mysqli_fetch_assoc($r);
$que    = "select count(patient_id) as iv from patient_inpatient_form where patient_id='$pid' ";
$re   = mysqli_query($con, $que);
$iv = mysqli_fetch_assoc($re);
$count = $iv['iv'] + $nv['nv'];


$query3  = "select g,l,p,a,d,high_risk_pregnancy as hrp from pastrecords where patient_id='$pid'";
$run3    = mysqli_query($con, $query3);
$data = mysqli_fetch_assoc($run3);

$query4  = "select ppi.edd,ppi.lmp,psf.date_of_discharge from patient_primary_information ppi,patient_surgery_form psf where ppi.id=psf.id";
$run4    = mysqli_query($con, $query4);
$data4    = mysqli_fetch_assoc($run4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>subhadra-hospitals dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
	
    <!-- Fontfamily -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <?php include 'menu3.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                    <h3 class="page-title">Welcome <?php echo $na['name']; ?> !</h3>
                    <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li class="active"><a href="patient_profile_dashboard.php?pid=<?php echo $pid;?>">Dashboard</a></li>
                                <li><a href="patient_profile1.php?pid=<?php echo $pid;?>">Patient Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-nine w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3><?php echo $count; ?></h3>
                                        <h6>No Of Visits</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-ten w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3><?php 
                                         $newDate = date("d-m-Y", strtotime($na['edd']));  
                                         $edd = strval($newDate);
                                        echo $edd; ?></h3>
                                        <h6>EDD</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-eleven w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3><?php echo 'G<sub><b>' . $data['g'] . '</b></sub>' . 'L<sub><b>' . $data['l'] . '</b></sub>' . 'P<sub><b>' . $data['p'] . '</b></sub>' . 'A<sub><b>' . $data['a'] . '</b></sub>' . 'D<sub><b>' . $data['d'] . '</b></sub>'; ?></h3>
                                        <h6>GVLPAD</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-six w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3><?php echo $data['hrp']; ?></h3>
                                        <h6>High Risk Pregnancy</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card flex-fill"><br>
                            <div>
                                <h4>&nbsp&nbspPatient OP Record</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>Tid</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($run = mysqli_fetch_assoc($run2)) {
                                            $newDate = date("d-m-Y", strtotime($run['date']));  
                                            $dd = strval($newDate);
                                            echo '<tr>
                                                        <td>' . $run['token_id'] . '</td>
                                                        <td>' . $dd . '</td>
                                                  </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-fill"><br>
                            <div>
                                <h4>&nbsp&nbspPatient IP Record</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tid</th>
                                            <th>Date Of Admission</th>
                                            <th>Date Of Discharge</th>
                                            <th>Type Of Patient</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($out = mysqli_fetch_assoc($ru)) {
                                            $newDate = date("d-m-Y", strtotime($out['doa'] ));  
                                            $dd = strval($newDate);
                                            $newDate = date("d-m-Y", strtotime($out['dod'] ));  
                                            $dd1 = strval($newDate);
                                            
                                            echo '<tr>
                                                        <td>' . $out['tid'] . '</td>
                                                        <td>' . $dd . '</td>
                                                        <td>' . $dd1. '</td>
                                                        <td>' . $out['tip'] . '</td>
                                                  </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card flex-fill"><br>
                            <div>
                                <h4>&nbsp&nbspPatient Important Dates</h4><br>
                                    <h6><b>&nbsp&nbsp&nbspEDD&nbsp</b>:&nbsp
                                    <?php
                                    $newDate = date("d-m-Y", strtotime($data4['edd']));  
                                    $dd = strval($newDate);
                                    $newDate = date("d-m-Y", strtotime($data4['date_of_discharge']));  
                                    $dd1 = strval($newDate);
                                    $newDate = date("d-m-Y", strtotime($data4['lmp']));  
                                    $dd2 = strval($newDate);
                                    echo $dd;
                                      ?></h6><br>     
                                    <h6><b>&nbsp&nbsp&nbspDate Of Discharge&nbsp</b>:&nbsp<?php echo $dd1; ?></h6><br>
                                    <h6><b>&nbsp&nbsp&nbspLMP&nbsp</b>:&nbsp<?php echo $dd2; ?></h6>  

                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="card flex-fill"><br>
                        <div>
                            <h4>&nbsp&nbspBills</h4>
                        </div>

                    </div>
                </div> -->

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>