<?php
$medicine_name = $_POST['medicineName'];
$quantity=$_POST['medicineQuantity'];
$expiry=$_POST['medicineExpiry'];
$email=$_POST['user_email'];
$donation_date=$_POST['donateDate'];
$status="Pending";
$curDate=$_POST['curDate'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    if($expiry<=$curDate)
    {
        echo "<script type='text/javascript'>window.alert('Expiry date already passed, Cannot donate !');</script>";
        echo "<meta http-equiv='refresh' content='0;url=userHome.php?user_email=$email'>";
    }
    else {      

            if($donation_date<$expiry && $donation_date>=$curDate)
            {
            $SELECT = "SELECT email from donations where email = ? Limit 1";
            $INSERT = "INSERT into donations values(?,?,?,?,?,?)";
            
            $stmt = $conn->prepare($SELECT);

            $stmt->bind_param("s",$email);
           
            $stmt->execute();
            
            $stmt->bind_result($email);
            
            $stmt->store_result();
            
            $rnum = $stmt->num_rows;
           
                $stmt->close();
                

                 $stmt = $conn->prepare($INSERT);
                
            $stmt->bind_param("ssisss",$email,$medicine_name,$quantity,$expiry,$donation_date,$status);
            
            $stmt->execute();
            
                echo "<script type='text/javascript'>window.alert('Donation Successful');</script>";
                echo "<meta http-equiv='refresh' content='0;url=userHome.php?user_email=$email'>";
            $stmt->close();
           
            $conn->close();
        }
        else
        {
            echo "<script type='text/javascript'>window.alert('Donation date exceeds expiry date or donation date already passed, Cannnot donate.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=userHome.php?user_email=$email'>";
        }
}
}
?>