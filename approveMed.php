<?php

$email=$_POST['apruvEmail'];
$medicine_name=$_POST['apruvMedicine'];
$quant=$_POST['quantity3'];
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
            $sql = "Update requested_medicines set Status='Successful' where email='$email' and medicine_name='$medicine_name'";
            $sql2 = "Update available_medicines set quantity=(quantity-$quant) where medicine_name='$medicine_name'";
            $sql3 = "delete from available_medicines where quantity=0";
            $res = mysqli_query($conn,$sql);
            $res2 = mysqli_query($conn,$sql2);
            $res3 = mysqli_query($conn,$sql3);
                echo "<script type='text/javascript'>window.alert('Medicine Approved Successfully.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=manageApprovals.php?user_email=$mail'>";
            $conn->close();
        }
?>