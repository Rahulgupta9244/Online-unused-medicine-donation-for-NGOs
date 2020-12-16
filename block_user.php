<?php

$email=$_POST['email99'];
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
            $sql = "DELETE FROM user_details where email='$email'";
            $sql2 = "INSERT into blocked_users values('$email')";
            $res = mysqli_query($conn,$sql);
            $res2 = mysqli_query($conn,$sql2);
                echo "<script type='text/javascript'>window.alert('User Blocked Successfully.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=manage_members.php?user_email=$mail'>";
            $conn->close();
        }
?>