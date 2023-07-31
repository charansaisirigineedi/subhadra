<?php

include "connect.php";
session_start();

include "check.php";

$time = $_GET['time'];
$pid = $_GET['pid'];
$tid = $_GET['tid'];

$delete = "DELETE FROM patient_billing_details where time='$time'";
$delete_perfrom = mysqli_query($con, $delete);

if($delete_perfrom)
{
    echo "<script>document.location='billing.php?pid=$pid&tid=$tid'</script>";
}
else
{
    echo "<script>document.location='billing.php?pid=$pid&tid=$tid'</script>";
}
?>