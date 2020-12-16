<?php
$name = $_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$psw1=$_POST['password1'];
$psw2=$_POST['password2'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
        $sql2="select email from blocked_users where email='$email'";
        $res= mysqli_query($conn,$sql2);
        if($res->num_rows==0)
        {
        if($psw1==$psw2){
            $SELECT = "SELECT email from user_details where email = ? Limit 1";
            $INSERT = "INSERT into user_details values(?,?,?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            if($rnum==0) {
                $stmt->close();

                 $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss",$name,$email,$phone,$address,$psw1);
            $stmt->execute();
                echo "<script type='text/javascript'>window.alert('Registration Successful.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?flag1=1'>";
            } else {
                echo "<script type='text/javascript'>window.alert('Email already registered.');</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?flag2=1'>";
            }
            $stmt->close();
            $conn->close();
        }
        else
        {
            echo "<script type='text/javascript'>window.alert('Invalid Credentials !');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?flag3=1'>";
        }
        }
    else
    {
        echo "<script type='text/javascript'>window.alert('This email is blocked !');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?flag3=1'>";
    }
}
?>