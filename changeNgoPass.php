<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";
    $email=$_POST['email21'];
    $oldPass=$_POST['oldPass'];
    $psw1=$_POST['password1'];
    $psw2=$_POST['password2'];
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else
    {
    $sql2="select * from ngo_details where email='$email'";
    $result= mysqli_query($conn,$sql2);
	$row=mysqli_fetch_array($result);
	if($row['email']==$email && $row['password']==$oldPass)
    {
    if($psw1==$psw2)
    {
    $sql = "UPDATE ngo_details SET password='$psw1' WHERE email='$email'";
    $res = mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>window.alert('Password changed successfully.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
    }
    else
    {
    echo "<script type='text/javascript'>window.alert('Error! Passwords do not match!');</script>";
    echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
    }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Please enter correct old password!');</script>";
        echo "<meta http-equiv='refresh' content='0;url=ngoHome.php?user_email=$email'>";
    }
}
?>