<?php

include "connect.php";

session_start();

if(empty($_SESSION['SID']))
{
    echo" <script>document.location='index.php'</script>";
}

$iid = $_GET['iid'];
$tid = $_GET['tid'];
$delete = "DELETE FROM patient_billing_details where token_id='0$tid' and item_id=$iid";
echo $delete;
$delete_perfrom = mysqli_query($con, $delete);

if($delete_perfrom)
{
    echo "Successfuly Deleted!";
}
else
{
    echo "Error Deleting Record";
}
?>