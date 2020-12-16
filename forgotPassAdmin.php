<?php
        
        if(isset($_GET['retry'])==1){
            session_start();
            $email77=$_SESSION['fEmail'];
        }
        else{
            $email77=$_POST['email55'];
            session_start();
            $_SESSION['fEmail']=$email77;
        }
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='medicine_donation';

        $con=mysqli_connect($servername,$username,$password,$dbname);
        $sql="select email from admin_login where email='$email77'";
        $result=mysqli_query($con,$sql);
        if($result->num_rows==0){
            echo "<script type='text/javascript'>window.alert('Email not registered.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?flag14=1'>";
        }
        else
        {
        if(isset($_GET['retry'])==1)
        {
            $otp=$_SESSION['fOTP'];
        }
        else
        {
            $otp=mt_rand(100000,999999);
            //$otp=123456;
            $_SESSION['fOTP']=$otp;
            $subject="The OTP for setting new password";
            $headers="From: rahul.unusedmedicinedonation@gmail.com";
            mail($email77,$subject,$otp,$headers);
        }
        
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
    <!-- endbuild -->
    
    <title>Online Unused Medicine Donation For NGOs</title>
    
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><i class="fa fa-info fa-lg"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><i class="fa fa-address-book fa-lg"></i> Contact</a></li>
                </ul> 
                <span class="navbar-text">
                </span>
            </div>      
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header row-span-3">
                <div class="col-12 col-sm-10">
                    <h1>Online Unused Medicine Donation For NGOs</h1>
                    <p>Remember that the happiest people are not those getting more, but those giving more.</p>
                </div>
                <div class="col-12 col-sm-2 align-self-center">
                    <div class="row row-header">
                        <?php
                                echo "<a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='index.php'><span class='fa fa-arrow-circle-left'></span> Back</a>";
                        ?>
                    </div><br>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
                <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Forgot Password</li>
            </ol>
        </div>
    </div>
    
    <div class="container">
        <div class="row row-content justify-content-center">
          <form action="forgotPassAdmin2.php" method="post">
            <div class="form-group row ml-2">
                <label class="sr-only" for="forgotPassword">New Password</label>
                <input type="password" class="form-control form-control-sm mr-1" placeholder="Enter new password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
            </div>
            <div class="form-group row ml-2">
                <label class="sr-only" for="forgotPassword">Re-enter Password</label>
                <input type="password" class="form-control form-control-sm mr-1" placeholder="Re-enter password" name="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
            </div>
            <div class="form-group row ml-2">
                <label class="sr-only" for="forgotPassword">Enter OTP sent to your email</label>
                <input type="text" class="form-control form-control-sm mr-1" placeholder="Enter OTP sent to email" name="otp77" required>
            </div>
            <div class="form-group row ml-2">
                <label class="sr-only" for="forgotPassword">Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="email7" placeholder="Enter registered email" name="email7">
            </div>
            <div class="form-group row ml-2">
                <label class="sr-only" for="forgotPassword">OTP sent</label>
                <input type="text" class="form-control form-control-sm mr-1" placeholder="OTP sent" name="otp7" id="otp7">
            </div>
            <div class="form col-sm-3">
                <button type="submit" class="btn btn-primary btn-sm ml-5">Submit</button>        
            </div>
          </form>
        </div> 
    </div> 
    
    <?php
        echo "<script type='text/javascript'>document.getElementById('email7').value='$email77';document.getElementById('otp7').value='$otp';document.getElementById('email7').style.display='none';document.getElementById('otp7').style.display='none';</script>";
    ?>
    
    
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-6 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-5 col-sm-5 offset-1 address">
                    <h5>Our Address</h5>
                    <address>
                        Bangalore Institute Of Technology<br>
		                K.R. Road V.V. Puram<br>
		                Bangalore<br>
                        <i class="fa fa-phone fa-lg"></i> : 9482668085 / 9131453582<br>
                        <i class="fa fa-envelope fa-lg"></i> : <a href="mailto:pratik.pailwan@gmail.com">pratik.pailwan@gmail.com / rkggupta1998@gmail.com</a>
                     </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div>
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-envelop" href="mailto:pratik.pailwan@gmail.com"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-sm-6"><br>
                    <p>© Copyright 2020 Online Unused Medicine Donation For NGOs</p>
                </div>
           </div>
        </div>
    </footer>

    <script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
</html>