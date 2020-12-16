<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='medicine_donation';

    $con=mysqli_connect($servername,$username,$password,$dbname);
	$usernm=$_POST['email2'];
	$passwd=$_POST['password2'];
    session_start();
    $_SESSION['myemail'] = $usernm;

$sql2="select email from blocked_users where email='$usernm'";
$res= mysqli_query($con,$sql2);
if($res->num_rows==0)
{
	$sql="select * from user_details where email='".$usernm."' and password='".$passwd."'limit 1 ";
    $result= mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
    
	if($row['email']==$usernm && $row['password']==$passwd){
         header("Location:userHome.php?user_email=$usernm");
          //echo "<meta http-equiv='refresh' content='0;url=userHome.php?user_email=$usernm'>";   
	
	}
	else{
            echo "<script type='text/javascript'>window.alert('Invalid Credentials');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?flag5=1'>";
        }
}
else {
		echo "<script type='text/javascript'>window.alert('This email is blocked !');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?flag11=1'>";
}
//flag11
?>
