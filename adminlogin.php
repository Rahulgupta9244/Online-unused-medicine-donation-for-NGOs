<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='medicine_donation';

$con=mysqli_connect($servername,$username,$password,$dbname);
	$usernm=$_POST['email'];
	$passwd=$_POST['password'];
    session_start();
    $_SESSION['myemail'] = $usernm;

        $sql5="select email from admin_login where email='$usernm'";
        $result5=mysqli_query($con,$sql5);
        if($result5->num_rows==0)
        {
            echo "<script type='text/javascript'>window.alert('Email not registered.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?flag4=1'>";
        }
        else
        {

            $sql="select * from admin_login where email='".$usernm."' and password='".$passwd."'limit 1 ";
            $result= mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);

            if($row['email']==$usernm && $row['password']==$passwd){
                header("Location:admin.php?user_email=$usernm");

            }
            else{
                echo "<script type='text/javascript'>window.alert('Invalid Credentials');</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?flag4=1'>";
                }

}
?>
