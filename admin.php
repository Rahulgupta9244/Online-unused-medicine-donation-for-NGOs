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
    <script type="application/javascript">
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
                    <a role="button" href="#" onclick="logoutfunction()"><span class="fa fa-sign-out"></span> Logout</a>
                </span>
            </div>      
        </div>
    </nav>

    <div id="ngoChangePasswordModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close" id="ngoChangePasswordCancel">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="changeAdminPass.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Change<br>Password</h1>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <input type="text" class="form-control form-control-sm mr-1" id="email41" name="email41">
                                <label class="sr-only" for="changePassword13">Enter Old Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="changePassword13" placeholder="Enter Old Password" name="oldPass" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="changePassword23">Enter New Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="changePassword23" placeholder="Enter New Password" name="password41" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="changePassword33">Re-enter Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="changePassword33" placeholder="Re-enter Password" name="password42" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5 top-right">
                            <img src="img/change_password.PNG" class="img-fluid ml-2" alt="changePassword">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-5">
                                <button type="submit" class="btn btn-primary btn-lg">Change Password</button>        
                            </div>
                        </div>
                        <?php
                                $em = $_GET['user_email'];
                                echo "<script type='text/javascript'>document.getElementById('email41').value='$em';document.getElementById('email41').style.display='none';</script>";
                          ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-12">
                    <h1>Online Unused Medicine Donation For NGOs</h1>
                    <p>Remember that the happiest people are not those getting more, but those giving more.</p>
                </div>
            </div>
            
            <div class="row row-header">
                <?php
                    $em = $_GET['user_email'];
                    echo "<div class='col col-12  col-sm-3'><a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='manage_members.php?user_email=$em'><span class='fa fa-sign-in'></span> Manage Members</a></div><br>

                    <div class='col col-12 col-sm-3'><a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='manageApprovals.php?user_email=$em'><span class='fa fa-sign-in'></span> Manage Approvals</a></div><br>

                    <div class='col col-12 col-sm-3'><a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='available_medicines_data.php?user_email=$em'><span class='fa fa-sign-in'></span> Available Medicines</a></div><br>";
                ?>
            </div><br>
            <div class="row row-header">
                <?php
                        $em = $_GET['user_email'];
                        echo "<div class='col col-12 col-sm-3'><a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='adminTransactions.php?user_email=$em'><span class='fa fa-sign-in'></span> Transactions</a></div><br>

                        <div class='col col-12 col-sm-3'><a role='button' class='btn btn-block nav-link btn-warning text-left' style='color:white' href='blockedUsers.php?user_email=$em'><span class='fa fa-sign-in'></span> Blocked Users</a></div><br>";
                ?>
                <div class="col col-12 col-sm-3">
                <a role="button" class="btn btn-block nav-link btn-warning text-left" id="ngoChangePassword"><span class="fa fa-sign-in"></span> Change Password</a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
                <ol class="col-12 breadcrumb">
                    <li class="breadcrumb-item">Admin</li>
                </ol>
        </div>
    </div>
    
    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/medicine_2.jpg" alt="Donate_Medicines">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“For it is in giving that we receive.”</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/donate_6.jpg" alt="Donate_Medicines">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“Donate!<br>Give to a greate cause.”</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/donate_5.jpeg" alt="donation">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“All you need is less.”</h4>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <button class="btn btn-danger btn-sm" id="carouselButton">
                        <span class="fa fa-pause"></span>
                    </button>
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