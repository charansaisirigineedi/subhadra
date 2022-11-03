<?php
include 'connect.php';

session_start();
include "check.php";
$pid=$_GET['pid'];
$tid=$_GET['tid'];

$sql= mysqli_query($con,"DELETE FROM `patient_inpatient_form` where patient_id='$pid' and token_id='$tid'");

if($sql){
    echo" <script>document.location='search-sf.php'</script>";
}

?>