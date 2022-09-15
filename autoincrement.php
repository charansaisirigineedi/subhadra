<html>
<body>
<?php
include 'connect.php';
date_default_timezone_set("Asia/Kolkata");
if (isset($_POST['submit'])) {
    $emp=autoincemp();
    echo $emp;
mysqli_query($conn, "INSERT INTO log (id) VALUES ('$emp')");
}
function autoincemp()
{
    global $value2;
    global $conn;
    $query = "select id from log order by id desc LIMIT 1";
    $stmt = mysqli_query($conn,$query);
    $rowcount=$stmt->num_rows;
    if ($rowcount > 0) {
    
      $row = mysqli_fetch_assoc($stmt);
        $value2 = $row['id'];
        $value2 = substr($value2,5);
        $value2 = (int)$value2 + 1;
        $str=date("dmy");
        $value2 = $str.sprintf('%s',$value2);
        $value = $value2;
        return $value;
    } else {
        $str=date("dmy");
        $value2 = $str.sprintf('%s',1);
        $value = $value2;
        return $value;
    }
}
      
?>
        <form action="#" method="post">
            ID:<input type="text" name="emp">
            <button class="submit" name="submit" type="submit" onclick="message()">Submit</button>
</form>

</body>
</html>
