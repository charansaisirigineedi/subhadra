<?php

include 'connect.php';
session_start();

include "check.php";

$pid = $_GET['pid'];

date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);

$token=autoincemp();
function autoincemp()
{
    date_default_timezone_set("Asia/Kolkata");
    $e = strval(date('Ymd'));
    $d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);
    global $value2;
    global $con;
    $query = "select token_id from existing_op_record  where date(time)='$d' order by token_id desc LIMIT 1";
    $stmt = mysqli_query($con,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
      $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['token_id'];
        $value2 = substr($value2,6);
        $value2 = (int)$value2 + 1;
        $str=date("ymd");
        $value2 = $str.sprintf('%s',$value2);
        $value = $value2;
        return $value;
    } else {
        $str=date("ymd");
        $value2 = $str.sprintf('%s',1);
        $value = $value2;
        return $value;
    }
}


$date = $d;
$query = "INSERT INTO `existing_op_record`(`id`, `token_id`, `date`,`dname`) VALUES ('$pid','$token','$date','Dr.Subhashini.V')";
$run = mysqli_query($con, $query);
echo" <script>document.location='bop.php?pid=$pid&tid=$token'</script>";


?>