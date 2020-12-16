<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";
    $email=$_POST['email41'];
    $oldPass=$_POST['oldPass'];
    $psw1=$_POST['password41'];
    $psw2=$_POST['password42'];
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else
    {
    $sql2="select * from admin_login where email='$email'";
    $result= mysqli_query($conn,$sql2);
	$row=mysqli_fetch_array($result);
	if($row['email']==$email && $row['password']==$oldPass)
    {
    if($psw1==$psw2)
    {
    $sql = "UPDATE admin_login SET password='$psw1' WHERE email='$email'";
    $res = mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>window.alert('Password changed successfully.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
    }
    else
    {
    echo "<script type='text/javascript'>window.alert('Error,Passwords do not match!');</script>";
    echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
    }
    }
  else
    {
        echo "<script type='text/javascript'>alert('Please enter correct old password!');</script>";
        echo "<meta http-equiv='refresh' content='0;url=admin.php?user_email=$email'>";
    }
}
?>