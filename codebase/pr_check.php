<?php
include 'connect.php';
session_start();
include "check.php";
$pid=$_GET['pid'];

$sql = mysqli_query($con,"select count(patient_id) as c from pastrecords where patient_id='$pid'");
$sql = mysqli_fetch_assoc($sql);

if($sql['c'] == 1)
{
   
    echo" <script>document.location='upr.php?pid=$pid'</script>";
}
else
{
  
    echo" <script>document.location='pr.php?pid=$pid'</script>";
}

?>