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
    <style>
    .loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: none;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .loader > img {
            width: 400px;
            margin-top: 100px;
        }
    </style>
    <script type="text/javascript">
        function fun77()
        {
        $('#forgotPasswordModal').modal('show');
        //document.getElementById('forgotPasswordModal').showModal();
        }
        function fun66()
        {
        $('#forgotPasswordModal').modal('hide');
        }
        function fun55()
        {
        $('#forgotPasswordModal2').modal('show');
        //document.getElementById('forgotPasswordModal2').showModal();
        }
        function fun44()
        {
        $('#forgotPasswordModal2').modal('hide');
        //document.getElementById('forgotPasswordModal2').hidden=true;
        }
        function fun33()
        {
        $('#forgotPasswordModal3').modal('show');
        //document.getElementById('forgotPasswordModal3').showModal();
        }
        function fun22()
        {
        $('#forgotPasswordModal3').modal('hide');
        }
        function loadgif()
        {
            var email=document.getElementById('forgotPassEmailAdmin').value;   
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
            if(regexp.test(String(email).toLowerCase()))
                {
                    $('.loader').show();
                }  
        }
        function loadgif2()
        {
            var email=document.getElementById('forgotPassEmail').value;   
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
            if(regexp.test(String(email).toLowerCase()))
                {
                    $('.loader').show();
                }  
        }
        function loadgif3()
        {
            var email=document.getElementById('forgotPassEmail3').value;   
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
            if(regexp.test(String(email).toLowerCase()))
                {
                    $('.loader').show();
                }  
        }
        function loadgif4()
        {
            var email=document.getElementById('donarRegisterEmail').value;   
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var password=document.getElementById('donarRegisterPassword').value;
            var password2=document.getElementById('donarRegisterPassword2').value;
            var name=document.getElementById('donarName').value;
            var phone=document.getElementById('donarPhone').value;
            var address=document.getElementById('donarAddress').value;
            var regexPass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if(regexp.test(String(email).toLowerCase()) && regexPass.test(String(password)) && regexPass.test(String(password)) && name.length!=0 && phone.length!=0 && address.length!=0)
                {
                    $('.loader').show();
                }  
        }
        function loadgif5()
        {
            var email=document.getElementById('ngoRegisterEmail').value;   
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var password=document.getElementById('ngoRegisterPassword').value;
            var password2=document.getElementById('ngoRegisterPassword2').value;
            var name=document.getElementById('ngoName').value;
            var phone=document.getElementById('ngoPhone').value;
            var address=document.getElementById('ngoAddress').value;
            var regexPass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if(regexp.test(String(email).toLowerCase()) && regexPass.test(String(password)) && regexPass.test(String(password)) && name.length!=0 && phone.length!=0 && address.length!=0)
                {
                    $('.loader').show();
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
                    <li class="nav-item active"><a class="nav-link" href="./index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><i class="fa fa-info fa-lg"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><i class="fa fa-address-book fa-lg"></i> Contact</a></li>
                </ul> 
                
            </div>      
        </div>
    </nav>

    <div id="adminModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Admin Login </h4>
                    <button type="button" class="close" id="adminLoginCancel">&times;</button>
                </div>
                <div class="modal-body relative">
                    <form action="adminlogin.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Hello,<br>Welcome back</h1>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="adminEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="adminEmail" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="adminPassword">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="adminPassword" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-check row ml-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"> Keep me logged in
                                </label>
                            </div>
                            <div class="form-group row ml-4 mt-2">
                            <a href="#" style="float:right" id="forgotPassbtn2" onclick="fun55()">Forgot password?</a>
                            </div>
                        </div>
                        <div class="form-group col-md-5 top-right">
                            <img src="img/login.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg">Sign in</button>        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="donarModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Donar Login </h4>
                    <button type="button" class="close" id="donarLoginCancel">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="userlogin.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Hello,<br>Welcome back</h1>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="donarEmail" placeholder="Enter email" name="email2" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarPassword">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="donarPassword" placeholder="Password" name="password2" required>
                            </div>
                            <div class="form-check row ml-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"> Keep me logged in
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/login.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg">Sign in</button> 
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form col-sm-4">
                                <h1> </h1>
                            </div>
                            <p>Don't have an account yet? <a href="#" id="donarSignUp">Sign-up</a><br><a href="#" style="float:right" class="forgot mr-5" id="forgotPassbtn" onclick="fun77()">Forgot password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="ngoModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">NGO Login </h4>
                    <button type="button" class="close" id="ngoLoginCancel">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="ngologin.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Hello,<br>Welcome back</h1>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="ngoEmail" placeholder="Enter email" name="email3" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoPassword">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="ngoPassword" placeholder="Password" name="password3" required>
                            </div>
                            <div class="form-check row ml-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"> Keep me logged in
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/login.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg">Sign in</button>        
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form col-sm-4">
                                <h1> </h1>
                            </div>
                            <p>Don't have an account yet? <a href="#" id="ngoSignUp">Sign-up</a><br><a href="#" style="float:right" class="forgot mr-5" id="forgotPassbtn3" onclick="fun33()">Forgot password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="forgotPasswordModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password </h4>
                    <button type="button" class="close" id="forgotPasswordCancel" onclick="fun66()">&times;</button>
                </div>
                <div class="modal-body relative">
                    <form action="forgotPass.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2"><br>
                                <h3>Choosing a hard-to-guess, but easy-to-remember password is important!</h3>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="adminEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="forgotPassEmail" placeholder="Enter your registered email" name="email77" required>
                            </div>
                            <div class="loader">
                                <img src="./img/loading.gif" alt="Loading..." />
                                <h4>Loading.. Please wait</h4>
                            </div>
                            <div class="form-check row ml-2">
                                <br><br><br>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/forgotpass.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            
                            <div class="form col-sm-3 mb-4">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="loadgif2()">Submit</button> <br>       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="forgotPasswordModal2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password </h4>
                    <button type="button" class="close" id="forgotPasswordCancel2" onclick="fun44()">&times;</button>
                </div>
                <div class="modal-body relative">
                    <form action="forgotPassAdmin.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2"><br>
                                <h3>Choosing a hard-to-guess, but easy-to-remember password is important!</h3>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="adminEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="forgotPassEmailAdmin" placeholder="Enter your registered email" name="email55" required>
                            </div>
                            <div class="loader">
                                <img src="./img/loading.gif" alt="Loading..." />
                                <h4>Loading.. Please wait</h4>
                            </div>
                            <div class="form-check row ml-2">
                                <br><br><br>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/forgotpass.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            
                            <div class="form col-sm-3 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="loadgif()">Submit</button>        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="forgotPasswordModal3" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password </h4>
                    <button type="button" class="close" id="forgotPasswordCancel3" onclick="fun22()">&times;</button>
                </div>
                <div class="modal-body relative">
                    <form action="forgotPassNGO.php" method="POST" class="login-form">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2"><br>
                                <h3>Choosing a hard-to-guess, but easy-to-remember password is important!</h3>
                            </div>
                            <br><br>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoEmail">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="forgotPassEmail3" placeholder="Enter registered email" name="email33" required>
                            </div>
                            <div class="loader">
                                <img src="./img/loading.gif" alt="Loading..." />
                                <h4>Loading.. Please wait</h4>
                            </div>
                            <div class="form-check row ml-2">
                                <br><br><br>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/forgotpass.jpg" class="img-fluid ml-2" alt="SignIn">
                        </div>
                        
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            
                            <div class="form col-sm-3 mb-4">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="loadgif3()">Submit</button>        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
     <div id="donarSignUpModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register Donar</h4>
                    <button type="button" class="close" id="donarSignUpCancel">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="user_details.php" method="POST">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Hello,<br>Register now</h1>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarName">User Name</label>
                                <input type="text" class="form-control form-control-sm" id="donarName" placeholder="User Name" name="name" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarRegisteEmail">Email ID</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="donarRegisterEmail" placeholder="Email ID" name="email" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarPhone">Phone Number</label>
                                <input type="tel" class="form-control form-control-sm" id="donarPhone" placeholder="Phone Number" name="phone" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarAddress">Address</label>
                                <input type="text" class="form-control form-control-sm" id="donarAddress" placeholder="Address" name="address" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarRegisterPassword">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="donarRegisterPassword" placeholder="Password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="donarRegisterPassword2">Re-Enter Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="donarRegisterPassword2" placeholder="Re-enter Password" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-5 top-right">
                            <img src="img/sign_up_2.PNG" class="img-fluid ml-2" alt="Sign_up">
                        </div>
                        <div class="loader">
                                <img src="./img/loading.gif" alt="Loading..." />
                                <h4>Loading.. Please wait</h4>
                        </div>
                        <br><br>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="loadgif4()">SignUp</button>        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="ngoSignUpModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register NGO</h4>
                    <button type="button" class="close" id="ngoSignUpCancel">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="ngo_details.php" method="POST">
                        <div class="form-group col-md-5">
                            <div class="form-group row ml-2">
                                <h1>Hello,<br>Register now</h1>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoName">NGO Name</label>
                                <input type="text" class="form-control form-control-sm mr-1" id="ngoName" placeholder="Enter NGO Name" name="name" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoRegisterEmail">Email ID</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="ngoRegisterEmail" placeholder="Email ID" name="email" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoPhone">Phone Number</label>
                                <input type="tel" class="form-control form-control-sm mr-1" id="ngoPhone" placeholder="Phone Number" name="phone" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoAddress">Address</label>
                                <input type="text" class="form-control form-control-sm mr-1" id="ngoAddress" placeholder="Address" name="address" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoRegisterPassword">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="ngoRegisterPassword" placeholder="Password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                            <div class="form-group row ml-2">
                                <label class="sr-only" for="ngoRegisterPassword2">Re-Enter Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="ngoRegisterPassword2" placeholder="Re-enter Password" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and one lowercase, and atleast 8 or more characters" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5 top-right">
                            <img src="img/sign_up_2.PNG" class="img-fluid ml-2" alt="Sign_up">
                        </div>
                        <br><br>
                        <div class="loader">
                                <img src="./img/loading.gif" alt="Loading..." />
                                <h4>Loading.. Please wait</h4>
                        </div>
                        <div class="form-row">
                            <div class="form col-sm-5">
                                <h1> </h1>
                            </div>
                            <div class="form col-sm-3">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="loadgif5()">SignUp</button>        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
     
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header row-span-3">
                <div class="col-12 col-sm-10">
                    <h1>Online Unused Medicine Donation For NGOs</h1>
                    <p>Remember that the happiest people are not those getting more, but those giving more.</p>
                </div>
                <div class="col-12 col-sm-2 align-self-center">
                    <div class="row row-header">
                    <a role="button" class="btn btn-block nav-link btn-warning text-left" id="adminLogin"><span class="fa fa-sign-in"></span> Admin</a>
                    </div><br>
                    <div class="row row-header">
                    <a role="button" class="btn btn-block nav-link btn-warning text-left" id="donarLogin"><span class="fa fa-sign-in"></span> Donar</a>
                    </div><br>
                    <div class="row row-header">
                    <a role="button" class="btn btn-block nav-link btn-warning text-left" id="ngoLogin"><span class="fa fa-sign-in"></span> NGO</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/donate_3.jpg" alt="Donate_Medicines">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“No one has ever become poor by giving.”</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/donate_1.jpeg" alt="Donate_Medicines">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“Think of giving not as a duty</h4>
                                <h4>but as a privilege.”</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/medicine_3.jpg" alt="Medicines">
                            <div class="carousel-caption text-right align-self-center">
                                <h4>“It is about making a difference.”</h4>
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
    <?php
        if(isset($_GET['flag1'])==1)
            echo "<script type='text/javascript'>$('#donarModal').modal('show');</script>"; 
        if(isset($_GET['flag2'])==1)
            echo "<script type='text/javascript'>$('#donarSignUpModal').modal('show');</script>";
        if(isset($_GET['flag3'])==1)
            echo "<script type='text/javascript'>$('#donarSignUpModal').modal('show');</script>";
        if(isset($_GET['flag4'])==1)
            echo "<script type='text/javascript'>$('#adminModal').modal('show');</script>";
    if(isset($_GET['flag5'])==1)
            echo "<script type='text/javascript'>$('#donarModal').modal('show');</script>";
    if(isset($_GET['flag6'])==1)
            echo "<script type='text/javascript'>$('#ngoModal').modal('show');</script>";
    if(isset($_GET['flag7'])==1)
            echo "<script type='text/javascript'>$('#ngoModal').modal('show');</script>"; 
        if(isset($_GET['flag8'])==1)
            echo "<script type='text/javascript'>$('#ngoSignUpModal').modal('show');</script>";
        if(isset($_GET['flag9'])==1)
            echo "<script type='text/javascript'>$('#ngoSignUpModal').modal('show');</script>";
        if(isset($_GET['flag11'])==1)
            echo "<script type='text/javascript'>$('#donarModal').modal('show');</script>";
        if(isset($_GET['flag13'])==1)
            echo "<script type='text/javascript'>$('#forgotPasswordModal').modal('show');</script>";
        if(isset($_GET['flag14'])==1)
            echo "<script type='text/javascript'>$('#forgotPasswordModal2').modal('show');</script>";
        if(isset($_GET['flag15'])==1)
            echo "<script type='text/javascript'>$('#forgotPasswordModal3').modal('show');</script>";
    ?>
    </body>
</html>