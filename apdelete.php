<?php
include 'connect.php';

session_start();
include "check.php";
$name=$_GET['name'];
$date=$_GET['date'];
$time=$_GET['time'];
$time1=$_GET['time1'];

$sql= mysqli_query($con,"DELETE FROM `prebooking` WHERE `Name` = '$name' AND `Date` = '$date' AND `time` = '$time' AND `time1` = '$time1'");

if($sql){
    echo" <script>document.location='prebooking_list.php'</script>";
}
