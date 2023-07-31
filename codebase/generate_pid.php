<?php
include "connect.php";
$date=$_GET["date"];
$emp=autoincemp($date);
function autoincemp($date)
{
    $date =str_replace("-","",$date);
    global $value2;
    global $con;
    $query = "select id from patient_primary_information where id LIKE '%".$date."%' order by id desc LIMIT 1";
    $stmt = mysqli_query($con,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
        $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['id'];
        $value2 = substr($value2,9);
        $value2 = (int)$value2 + 1;
        $value2 = $date.sprintf('%s',$value2);
        $value = 'P'.$value2;
        return $value;
    } else {
        $str=$date;
        $value2 = $str.sprintf('%s',1);
        $value = 'P'.$value2;
        return $value;
    }
}

echo $emp;
?>