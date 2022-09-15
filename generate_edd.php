<?php

include 'connect.php';

$lmp = $_GET['lmp'];

function ageCalculator($lmp){
    if(!empty($lmp)){
        $newDate = date('Y-m-d', strtotime($lmp. ' + 9 months'.'+ 7 days'));
        echo $newDate;
    }else{
        return 0;
    }
}
echo ageCalculator($lmp);
?>