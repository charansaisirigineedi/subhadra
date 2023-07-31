<?php

include 'connect.php';

$dname = $_GET['dname'];

    if(!empty($dname)){
        $pid = $_GET['pid'];
        $tid = $_GET['tid'];
        $query = "UPDATE `existing_op_record` SET `dname`='$dname' WHERE id='$pid' and token_id='$tid'";
        $run = mysqli_query($con, $query);

        if($run)
        {
            echo $dname;
        }
    }
?>