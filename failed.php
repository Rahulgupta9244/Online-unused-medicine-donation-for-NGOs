<?php

$email=$_POST['failedEmail'];
$medicine_name=$_POST['failedMedicine'];
session_start();
$mail=$_SESSION['myemail'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
            $sql = "Update donations set Status='Failed' where email='$email' and medicine_name='$medicine_name'";
            $res = mysqli_query($conn,$sql);
            echo "<script type='text/javascript'>window.alert('Status updated Successfully.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=manageApprovals.php?user_email=$mail'>";
            $conn->close();
        }
?>