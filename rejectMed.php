<?php

$email=$_POST['rejectEmail'];
$medicine_name=$_POST['rejectMedicine'];
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
            $sql = "Update requested_medicines set Status='Rejected' where email='$email' and medicine_name='$medicine_name'";
            $res = mysqli_query($conn,$sql);
            echo "<script type='text/javascript'>window.alert('Medicine Rejected Successfully.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=manageApprovals.php?user_email=$mail'>";
            $conn->close();
        }
?>