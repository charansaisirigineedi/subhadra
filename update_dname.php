<?php

include 'connect.php';

$dname = $_GET['dname'];
$pid = $_GET['pid'];
$tid = $_GET['tid'];
    if(!empty($dname)){
        $query = "UPDATE `patient_surgery_form` SET 
        `doctor_name`='$dname' WHERE id='$pid' and token_id = '$tid'";
        $run = mysqli_query($con , $query);
        if($run)
        {
            echo $dname;
        }
    }
?>