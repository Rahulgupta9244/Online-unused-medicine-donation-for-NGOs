<?php
$name = $_POST['name77'];
$phone=$_POST['phone77'];
$address=$_POST['address77'];
$psw1=$_POST['password77'];
$email=$_POST['email77'];
$otp=$_POST['otp'];
$otp2=$_POST['otp2'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);


if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
        if($otp==$otp2){
            $SELECT = "SELECT email from user_details where email = ? Limit 1";
            $INSERT = "INSERT into user_details values(?,?,?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss",$name,$email,$phone,$address,$psw1);
            $stmt->execute();
            echo "<script type='text/javascript'>window.alert('Registration Successful.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?flag1=1'>";
            } 
        else{
                echo "<script type='text/javascript'>window.alert('OTP Incorrect, Try Again.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=user_details.php?retry=1'>";
            }
            
        
}
?>
