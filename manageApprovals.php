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
                                    function fn5(email,medName,quantity){
                                    document.getElementById('apruvMedModal2').showModal();
                                    document.getElementById('apruvEmail').value = email;
                                    document.getElementById('apruvMedicine').value = medName;
                                    document.getElementById('quantity3').value = quantity;
                                    document.getElementById('apruvEmail').style.display = 'none';
                                    document.getElementById('apruvMedicine').style.display = 'none';
                                    document.getElementById('quantity3').style.display = 'none';
                                    }
                                    function fn6()
                                    {
                                      document.getElementById('apruvMedModal2').hidden=true;
                                      document.location.reload();
                                    }
                                    function fn7(email,medName){
                                    document.getElementById('rejectMedModal2').showModal();
                                    document.getElementById('rejectEmail').value = email;
                                    document.getElementById('rejectMedicine').value = medName;
                                    document.getElementById('rejectEmail').style.display = 'none';
                                    document.getElementById('rejectMedicine').style.display = 'none';
                                    }
                                    function fn8()
                                    {
                                      document.getElementById('rejectMedModal2').hidden=true;
                                      document.location.reload();
                                    }
        
                                    function fn51(name2,em,quantity){
                                    document.getElementById('donationStatusModal').showModal();
                                    document.getElementById('deliveryEmail').value = em;
                                    document.getElementById('deliveryMedicine').value = name2;
                                    document.getElementById('quantity31').value = quantity;
                                    document.getElementById('deliveryExpiry').value = document.getElementById(name2).name;
                                    document.getElementById('deliveryEmail').style.display = 'none';
                                    document.getElementById('deliveryMedicine').style.display = 'none';
                                    document.getElementById('quantity31').style.display = 'none';
                                    document.getElementById('deliveryExpiry').style.display = 'none';
                                    }
                                    function fn61()
                                    {
                                      document.getElementById('donationStatusModal').hidden=true;
                                      document.location.reload();
                                    }
                                    function fn71(email,medName){
                                    document.getElementById('failedModal').showModal();
                                    document.getElementById('failedEmail').value = email;
                                    document.getElementById('failedMedicine').value = medName;
                                    document.getElementById('failedEmail').style.display = 'none';
                                    document.getElementById('failedMedicine').style.display = 'none';
                                    }
                                    function fn81()
                                    {
                                      document.getElementById('failedModal').hidden=true;
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
                <li class="breadcrumb-item active">Manage Approvals</li>
            </ol>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center"> <h6>Manage NGO requests </h6></div>
        <div class="row row-content justify-content-center">
             <?php
//                    session_start();
//                    $email=$_SESSION['myemail'];
                    $conn = mysqli_connect("localhost","root","","medicine_donation");
                    if($conn-> connect_error) {
                     die("Connection Failed:". $conn-> connect_error);
                    }
                    $sql = "SELECT email,medicine_name,quantity,date_of_collection from requested_medicines where status='Pending'";
                    $result = $conn-> query($sql);
                    if($result-> num_rows > 0) {
                        echo "<table><tr><th>Email</th><th>Medicine Name</th><th>Quantity</th><th>Date of Collection</th><th>Approve/Reject</th></tr>";
                        while($row = $result-> fetch_assoc()) {
                            $em = $row["email"];
                            $em3 = $row["medicine_name"];
                            $quant2 = $row["quantity"];
                            echo "<tr><td>" . $row["email"] . 
                                "</td><td>" . $row["medicine_name"] . 
                                "</td><td>" . $row["quantity"] .
                                "</td><td>" . $row["date_of_collection"] .
                                "</td><td><button class='btns mr-1' id='$em3' name='$em' onclick='fn5(this.name,this.id,$quant2)'>Approve</button><button id='$em' name='$em3' onclick='fn7(this.id,this.name)'>Reject</button></td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
//                        echo "<script type='text/javascript'>window.alert('No request yet !');</script>";
//                        echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
                        echo "No pending request from NGOs !";
                    }
                    $conn-> close();
                ?>
        </div> 
    </div>
    <dialog id="apruvMedModal2"><div><h6>Confirm ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="btncancel2" onclick="fn6()">Close</button></h6></div>
    <form action="approveMed.php" method="post"><input type="text" id="apruvEmail" name="apruvEmail"><input type="text" id="apruvMedicine" name="apruvMedicine"><input type="text" id="quantity3" name="quantity3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">Approve</button>
      </form>  
    </dialog>
    <dialog id="rejectMedModal2"><div><h6>Confirm ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="btncancel3" onclick="fn8()">Close</button></h6></div>
    <form action="rejectMed.php" method="post"><input type="text" id="rejectEmail" name="rejectEmail"><input type="text" id="rejectMedicine" name="rejectMedicine">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">Reject</button>
      </form>  
    </dialog>
    
    <div class="container">
        <div class="row justify-content-center"><h6>Manage Donations </h6></div>
        <div class="row row-content justify-content-center">
             <?php
//                    session_start();
//                    $email=$_SESSION['myemail'];
                    $conn = mysqli_connect("localhost","root","","medicine_donation");
                    if($conn-> connect_error) {
                     die("Connection Failed:". $conn-> connect_error);
                    }
                    $sql = "SELECT email,medicine_name,quantity,expiry_date,donation_date from donations where status='Pending'";
                    $result = $conn-> query($sql);
                    if($result-> num_rows > 0) {
                        echo "<table><tr><th>Email</th><th>Medicine Name</th><th>Quantity</th><th>Expiry Date</th><th>Date of Donation</th><th>Status</th></tr>";
                        while($row = $result-> fetch_assoc()) {
                            $em = $row["email"];
                            $em3 = $row["medicine_name"];
                            $quant2 = $row["quantity"];
                            $exDate = $row["expiry_date"];
                            echo "<tr><td>" . $row["email"] . 
                                "</td><td>" . $row["medicine_name"] . 
                                "</td><td>" . $row["quantity"] .
                                "</td><td>" . $row["expiry_date"] .
                                "</td><td>" . $row["donation_date"] .
                                "</td><td><button id='$em3' name='$exDate' class='$em' onclick='fn51(this.id,this.className,$quant2)'>Delivered</button><button id='$em' name='$em3' onclick='fn71(this.id,this.name)' class='btns ml-1'>Failed</button></td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
//                        echo "<script type='text/javascript'>window.alert('No request yet !');</script>";
//                        echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
                        echo "No pending Donation request !";
                    }
                    $conn-> close();
                ?>
        </div> 
    </div>
    <dialog id="donationStatusModal"><div><h6>Confirm ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="btncancel21" onclick="fn61()">Close</button></h6></div>
    <form action="delivered.php" method="post"><input type="text" id="deliveryEmail" name="deliveryEmail"><input type="text" id="deliveryMedicine" name="deliveryMedicine"><input type="text" id="quantity31" name="quantity31"><input type="date" id="deliveryExpiry" name="deliveryExpiry">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">Delivered</button>
      </form>  
    </dialog>
    <dialog id="failedModal"><div><h6>Confirm ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="btncancel31" onclick="fn81()">Close</button></h6></div>
    <form action="failed.php" method="post"><input type="text" id="failedEmail" name="failedEmail"><input type="text" id="failedMedicine" name="failedMedicine">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">Failed</button>
      </form>  
    </dialog>
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