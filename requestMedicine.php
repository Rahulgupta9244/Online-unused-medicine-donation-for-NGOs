<?php
$medName = $_POST['medNamex'];
$medQuantity=$_POST['medQuantity'];
$medCollection=$_POST['medCollection'];
$email=$_POST['email7'];
$status='Pending';
$curDate=date("Y-m-d");

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
//if(empty($name) || empty($phone) || empty($email) || empty($address) || empty($psw1) || empty($psw2)){
//    echo "<script type='text/javascript'>window.alert('Please fill all the fields before submitting.')</script>";
//    echo "<meta http-equiv='refresh' content='0;url=index.html'>";
//}
// else {
if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    if($medCollection>=$curDate)
    {
    $SELECT = "SELECT email from requested_medicines where email = ?";
    $INSERT = "INSERT into requested_medicines values(?,?,?,?,?)";
    
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssiss",$email,$medName,$medQuantity,$medCollection,$status);
    $stmt->execute(); 
            $stmt->close();
            $conn->close();
    echo "<script type='text/javascript'>window.alert('Medicine requested successfully.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
    }
    else
    {
        echo "<script type='text/javascript'>window.alert('Request Unsuccessful! Choose proper collection date.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
    }
}
?>