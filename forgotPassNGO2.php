<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='medicine_donation';

    $con=mysqli_connect($servername,$username,$password,$dbname);
	$email=$_POST['email7'];
	$otp7=$_POST['otp7'];
    $otp77=$_POST['otp77'];
    $password1=$_POST['pass1'];
    $password2=$_POST['pass2'];

if($password1==$password2)
{
	if($otp7==$otp77){
        $sql="update ngo_details set password='$password1' where email='$email'";
        $res= mysqli_query($con,$sql);
        echo "<script type='text/javascript'>window.alert('Password changed successfully.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?flag6=1'>";
          //header("Location:userHome.php?user_email=$usernm");   
	
	}
	else{
            echo "<script type='text/javascript'>window.alert('Incorrect OTP, could not change password. Try again.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=forgotPassNGO.php?retry=1'>";
        }
}
else {
		echo "<script type='text/javascript'>window.alert('Entered passwords do not match. Try again !');</script>";
        echo "<meta http-equiv='refresh' content='0;forgotPassNGO.php?retry=1'>";
}
?>
