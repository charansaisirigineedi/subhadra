<?php

include 'connect.php';

$dname = $_GET['dname'];

    if(!empty($dname)){
        $pid = $_GET['pid'];
        $tid = $_GET['tid'];
        
        $query3 = "UPDATE `patient_surgery_form` SET 
        `doctor_name`='$dname' WHERE id='$pid' and token_id = '$tid'";
        $run3 = mysqli_query($con , $query3);

        if($run3)
        {
            echo $dname;
        }
    }
?>