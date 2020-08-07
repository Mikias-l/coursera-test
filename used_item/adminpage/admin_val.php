<?php
session_start();

?>
<?php

include("dbconnect.php");



if(isset($_POST['login']))
{
    $admin_username=$_POST['admin_username'];
    $admin_password=$_POST['admin_password'];
	
	

    $check_admin="SELECT * FROM `admin` WHERE admin_username='$admin_username' AND admin_password='$admin_password'";

 
    $run=mysqli_query($conn,$check_admin);

    if(mysqli_num_rows($run))
    {
	 echo "<script>alert('You're successfully login!')</script>";
       
 echo "<script>window.open('index.php','_self')</script>";
       
$_SESSION['admin_username']=$admin_username;



    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
		  echo "<script>window.open('../index.php','_self')</script>";
		
		 exit();
		
    }
}
?>