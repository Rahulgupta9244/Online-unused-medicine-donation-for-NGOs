<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone=$_POST['telnum'];
$email=$_POST['emailid'];
$contact_via=$_POST['contact_via'];
$feedback=$_POST['feedback'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "medicine_donation";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    $SELECT = "SELECT email from feedback where email = ? Limit 1";
    $INSERT = "INSERT into feedback values(?,?,?,?,?,?)";
    
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($hid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();
        
         $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssssss",$fname,$lname,$phone,$email,$contact_via,$feedback);
    $stmt->execute();
        echo "<script type='text/javascript'>window.alert('Feedback submitted successfully !');</script>"; 
        echo "<meta http-equiv='refresh' content='0;url=contactus.php'>";
    }
    else {
        echo "<script type='text/javascript'>window.alert('You can submit feedback only once !');</script>";
        echo "<meta http-equiv='refresh' content='0;url=contactus.php'>";      
    }
            $stmt->close();
            $conn->close();
        }
?>