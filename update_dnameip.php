<?php

include 'connect.php';

$dname = $_GET['dname'];

    if(!empty($dname)){
        $pid = $_GET['pid'];
        $tid = $_GET['tid'];
        // $query2="SELECT `did`  FROM `doctor details` WHERE dname like '$dname' ";
        // $run2 = mysqli_query($con, $query2);
        // $res=mysqli_fetch_assoc($run2);
        // $did=$res['did'];
        // $query = "UPDATE `patient_surgery_form` SET `dname`='$dname' WHERE id='$pid' and token_id='$tid'";
        // $run = mysqli_query($con, $query);
        $query3 = "UPDATE `patient_surgery_form` SET 
        `doctor_name`='$dname' WHERE id='$pid' and token_id = '$tid'";
        $run3 = mysqli_query($con , $query3);

        if($run3)
        {
            echo $dname;
        }
    }
?>