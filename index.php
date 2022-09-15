<?php session_start();

include 'connect.php';
 
if(isset($_POST['login']))
{

$password=$_POST['pass'];
htmlspecialchars($password);
 $query= "select sid,name from  staff  where spw='$password'";
 $result=mysqli_query($con,$query) or die (mysqli_error($con));
 $details=mysqli_fetch_assoc($result);

 $counter=mysqli_num_rows($result);
 
 if($counter!=0)
 {
    if($password=='doctor')
    {
    $_SESSION['SID']=$details['sid'];
    $_SESSION['NAME']=$details['name'];
    echo" <script>document.location='ou_list.php'</script>";
    }

    else{
        $_SESSION['SID']=$details['sid'];
        $_SESSION['NAME']=$details['name'];
        echo" <script>document.location='dashboard.php'</script>";

    }


 }
 else
 {
    echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";

 }

}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Subhadra Hospitals - Login</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
    
        <!-- Fontfamily -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    
        <!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-left">
                            <img class="img-fluid" src="assets/img/logo.png" alt="Logo">
                        </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Login</h1>
                                <p class="account-subtitle">Subhadra Hospitals</p>
                                
                                <!-- Form -->
                                <form method="post">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                    </div>
                                </form>
                                <br>
                                <a href="patient_entry.php"><strong>New Patient Registration</strong></a>
                                <!-- /Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
        
        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        
        <!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>
        
    </body>
</html>