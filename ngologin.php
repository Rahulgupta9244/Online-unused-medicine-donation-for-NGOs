<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='medicine_donation';

$con=mysqli_connect($servername,$username,$password,$dbname);
	$usernm=$_POST['email3'];
	$passwd=$_POST['password3'];
    session_start();
    $_SESSION['myemail'] = $usernm;


if(!empty($usernm) || !empty($passwd)){
	$sql="select * from ngo_details where email='".$usernm."' and password='".$passwd."'limit 1 ";
    $result= mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
    
	if($row['email']==$usernm && $row['password']==$passwd){
		header("Location:ngoHome.php?user_email=$usernm");
	
	}
	else{
		echo "<script type='text/javascript'>window.alert('Invalid Credentials');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?flag6=1'>";
        }
}
else {
		echo "<script type='text/javascript'>window.alert('Invalid Credentials');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?flag6=1'>";
}
?>
