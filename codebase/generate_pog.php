<?php

include 'connect.php';
$lmp=$_GET['lmp'];
    function numWeeks($dateOne, $dateTwo){
        //Create a DateTime object for the first date.
        $firstDate = new DateTime($dateOne);
        //Create a DateTime object for the second date.
        $secondDate = new DateTime($dateTwo);
        //Get the difference between the two dates in days.
        $differenceInDays = $firstDate->diff($secondDate)->days;
        //Divide the days by 7
        $differenceInWeeks = $differenceInDays / 7;
        //Round down with floor and return the difference in weeks.
        return floor($differenceInWeeks);
    }
date_default_timezone_set("Asia/Kolkata");
$e = strval(date('Ymd'));
$d  = substr($e,0,4).'-'.substr($e,4,2).'-'.substr($e,6,2);
echo  numWeeks($lmp, $d).' weeks';
?>




