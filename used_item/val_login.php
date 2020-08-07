<?php
session_start();
?>
<?php 
	include('dbconnect.php');
	

	if(isset($_POST['login'])){

		$email='email';
		$password='password';
		$sql="SELECT * FROM `user` WHERE `Email`='$email' AND password='$password'";
		$run=mysqli_query($conn,$sql);

    if(mysqli_num_rows($run)>0)
    {
	 echo "<script>alert('You're successfully login!')</script>";
       
 echo "<script>window.open('user_index.php','_self')</script>";
       
$_SESSION['email']=$email;

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
		  echo "<script>window.open('login1.php','_self')</script>";
		
		 exit();
		
    }
}
 ?>