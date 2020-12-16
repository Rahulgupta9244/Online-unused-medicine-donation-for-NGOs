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
    
    <style type="text/css">
    table {
        width: auto;
        color: black;
        font-family: monospace;
        font-size: 15px;
        text-align: left;
        border-color: white;
        }
        th {
            padding: 10px;
            margin: 10px;
            background-color: orange;
            color: black;
            font-size: 17px;
        }
        td {
            padding: 10px;
            margin: 10px;
            background-color: deepskyblue;
        }
    </style>
    
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
                <li class="breadcrumb-item">Donar SignUp</li>
                <li class="breadcrumb-item active">Email Verification</li>
            </ol>
        </div>
    </div>
<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "medicine_donation";
    $testflag=0;
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(isset($_GET['retry'])==1)
        {
            session_start();
            $name = $_SESSION['sname'];
            $phone=$_SESSION['sphone'];
            $address=$_SESSION['saddress'];
            $email=$_SESSION['semail'];
            $psw1=$_SESSION['spassword1'];
            $psw2=$_SESSION['spassword2'];
            $otp=$_SESSION['sotp'];
            $testflag=1;
        }
        else
        {
            $name = $_POST['name'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $psw1=$_POST['password1'];
            $psw2=$_POST['password2'];
            
            if($psw1!=$psw2)
            {
                echo "<script type='text/javascript'>window.alert('Error, Entered passwords do not match!');</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?flag3=1'>";
            }
            else
            {
                $sql3="select email from user_details where email='$email'";
                $res3= mysqli_query($conn,$sql3);
                if($res3->num_rows!=0)
                {
                    echo "<script type='text/javascript'>window.alert('Email already registered.');</script>";
                    echo "<meta http-equiv='refresh' content='0;url=index.php?flag2=1'>";
                }
                else
                {
                $sql2="select email from blocked_users where email='$email'";
                $res= mysqli_query($conn,$sql2);
                if($res->num_rows==0)
                {
                    $otp=mt_rand(100000,999999);
                    //$otp=123456;
                    $subject="The OTP for registration";
                    $headers="From: rahul.unusedmedicinedonation@gmail.com";
                    mail($email,$subject,$otp,$headers);
                    $testflag=1;

                    session_start();
                    $_SESSION['semail']=$email;
                    $_SESSION['sname']=$name;
                    $_SESSION['saddress']=$address;
                    $_SESSION['sphone']=$phone;
                    $_SESSION['spassword1']=$psw1;
                    $_SESSION['spassword2']=$psw2;
                    $_SESSION['sotp']=$otp;
                }
                else
                {
                    echo "<script type='text/javascript'>window.alert('This email is blocked !');</script>";
                    echo "<meta http-equiv='refresh' content='0;url=index.php?flag3=1'>";
                }
        }
        }
        }

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else if($psw1==$psw2 && $testflag==1){
            
                echo "<div class='container'><div class='row row-content justify-content-center'><form action='ulogin2.php' method='post'><div class='form-group row ml-2'><label class='sr-only' for='emailVerification'>Enter OTP</label><input type='text' class='form-control form-control mr-1' placeholder='Enter OTP sent to Email' name='otp2' id='otp2' required></div><input type='email' id='email77' name='email77'><input type='number' name='otp' id='otp'><input type='text' id='name77' name='name77'><input type='text' id='phone77' name='phone77'><input type='text' id='address77' name='address77'><input type='text' id='password77' name='password77'><div class='form col-sm-3'><button type='submit' class='btn btn-primary btn ml-5'>Submit</button></div></form></div></div>";
                echo "<script type='text/javascript'>document.getElementById('otp').value='$otp';document.getElementById('email77').value='$email';document.getElementById('name77').value='$name';document.getElementById('phone77').value='$phone';document.getElementById('address77').value='$address';document.getElementById('password77').value='$psw1';document.getElementById('otp').style.display='none';document.getElementById('email77').style.display='none';document.getElementById('name77').style.display='none';document.getElementById('address77').style.display='none';document.getElementById('phone77').style.display='none';document.getElementById('password77').style.display='none';</script>";
    
    
}

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
