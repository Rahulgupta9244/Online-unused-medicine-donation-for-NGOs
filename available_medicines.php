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
        function fn11(name,quantity)
        {
           //document.getElementById('addModal').showModal();
           document.getElementById('medNamex').value=name;
           document.getElementById('medQuantity').max=quantity;
        }
        function fn12()
        {
            document.location.reload();
        }
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
                    echo "<a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='ngoHome.php?user_email=$em'><span class='fa fa-arrow-circle-left'></span> Back</a>";
                    ?>
                    </div><br>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
                <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item">NGO</li>
                <li class="breadcrumb-item active">Available Medicines</li>
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
                    $sql = "SELECT medicine_name,quantity,expiry_date from available_medicines";
                    $result = $conn-> query($sql);
                    if($result-> num_rows > 0) {
                        echo "<table><tr><th>Medicine Name</th><th>Quantity</th><th>Expiry Date</th><th>Request</th></tr>";
                        while($row = $result-> fetch_assoc()) {
                            $medname2=$row["medicine_name"];
                            $medquantity2=$row["quantity"];
                            echo "<tr><td>" . $row["medicine_name"] . 
                                "</td><td>" . $row["quantity"] . 
                                "</td><td>" . $row["expiry_date"] .
                                "</td><td><button class='requestbtn' name='$medname2' style='width:100%' onclick='fn11(this.name,$medquantity2)'>Add</button></td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "<script type='text/javascript'>window.alert('No medicine is available right now !');</script>";
                        echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
                    }
                    $conn-> close();
                ?>
        </div> 
    </div> 
     <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Request Medicine</h4>
                    <button type="button" class="close" id="addCancel" onclick="fn12()">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="requestMedicine.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Request<br>Medicine</h1>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <input type="text" class="form-control form-control-sm mr-1" id="email7" name="email7">
                                <label class="sr-only" for="medName">Medicine Name</label>
                                <input type="text" class="form-control form-control-sm mr-1" id="medNamex" placeholder="Medicine Name" name="medNamex" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="medQuantity">Quantity</label>
                                <input type="number" min="1" class="form-control form-control-sm mr-1" id="medQuantity" placeholder="Quantity" name="medQuantity" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="medCollection">Collection Date</label>
                                <div><p>Collection Date:</p></div>
                                <input type="date" class="form-control form-control-sm mr-1" id="medCollection" placeholder="Collection Date" name="medCollection" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5 top-right">
                            <img src="img/add_medicine.jpg" class="img-fluid ml-2" alt="addMedicine">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-5">
                                <button type="submit" class="btn btn-primary btn-lg">Generate Request</button>        
                            </div>
                        </div>
                        <?php
                                $em = $_GET['user_email'];
                                echo "<script type='text/javascript'>document.getElementById('email7').value='$em';document.getElementById('email7').style.display='none';</script>";
                          ?>
                    </form>
                </div>
            </div>
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