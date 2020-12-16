<?php
    session_start();
    $email=$_SESSION['myemail'];
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
    <script type="text/javascript">
        function logoutfunction()
        {
            if(window.confirm("Are you sure you want to Logout?") === true)
            { 
                window.location.replace("index.php");
            }
        }
    </script>
    
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
                    <?php
                    $em = $_GET['user_email'];
                    echo "<label name='user_email'>$em</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    ?>
                    <a role="button" id="donarLogoutButton" href="#" onclick="logoutfunction()"><span class="fa fa-sign-out"></span> Logout</a>
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
                                $em = $_GET['user_email'];
                                echo "<a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='admin.php?user_email=$em'><span class='fa fa-arrow-circle-left'></span> Back</a>";
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
                <li class="breadcrumb-item active">Blocked Users</li>
            </ol>
        </div>
    </div>
    
    <div class="container">
        <div class="row row-content justify-content-center">
            <?php
//                    session_start();
//                    $email=$_SESSION['myemail'];
                    $conn = mysqli_connect("localhost","root","","medicine_donation");
                    if($conn-> connect_error) {
                     die("Connection Failed:". $conn-> connect_error);
                    }
                    $sql = "SELECT email from blocked_users";
                    $result = $conn-> query($sql);
                    $var = 1;
                    if($result-> num_rows > 0) {
                        echo "<table><tr><th>S.No.</th><th>Email</th></tr>";
                        while($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $var . 
                                "</td><td>" . $row["email"] . 
                                "</td></tr>";
                            $var = $var + 1;
                        }
                        echo "</table>";
                    }
                    else {
                        echo "<script type='text/javascript'>window.alert('No Blocked User !');</script>";
                        echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
                    }
                    $conn-> close();
                ?>
        </div> 
    </div> 
    
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