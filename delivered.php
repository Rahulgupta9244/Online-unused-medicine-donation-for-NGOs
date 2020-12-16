<?php

$email=$_POST['deliveryEmail'];
$medicine_name=$_POST['deliveryMedicine'];
$quant=$_POST['quantity31'];
$expiry=$_POST['deliveryExpiry'];
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
            $sql = "update donations set status='Successful' where email='$email' and medicine_name='$medicine_name'";
            $res = mysqli_query($conn,$sql);
            $sql4="select medicine_name from available_medicines where medicine_name='$medicine_name'";
            $res4= mysqli_query($conn,$sql4);
            if($res4->num_rows>0)
            {
                $sql2="update available_medicines set quantity=(quantity+$quant) where medicine_name='$medicine_name'"; 
                $res2= mysqli_query($conn,$sql2);
            }
            else
            {
                $select = "select medicine_name from available_medicines where medicine_name=?";
                $INSERT2 = "INSERT into available_medicines values(?,?,?)";
                $stmt2 = $conn->prepare($select);
                $stmt2->bind_param("s",$medicine_name);
                $stmt2->execute();
                $stmt2->bind_result($medicine_name);
                $stmt2->store_result();
                $rnum2 = $stmt2->num_rows;
                $stmt2->close();
                $stmt2 = $conn->prepare($INSERT2);
                $stmt2->bind_param("sis",$medicine_name,$quant,$expiry);
                $stmt2->execute();
                $stmt2->close();
            }

                echo "<script type='text/javascript'>window.alert('Status updated successfully.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=manageApprovals.php?user_email=$mail'>";
            $conn->close();
        }
?>
            