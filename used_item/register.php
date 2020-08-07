<?php 
	
	include('dbconnect.php');
	if(isset($_POST['save']))
	{
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$address1=$_POST['address1'];
	
	$cheekuser="SELECT * FROM `user` WHERE `Email`= '$email'";

$run=mysqli_query($conn,$cheekuser);

if(mysqli_num_rows($run)>0)
{
	echo"<script> alert ('User registered before')</script>";
	echo"<script>window.open('customer_registration.php','_self')</script>";
}
elseif(mysqli_num_rows($run)<=0)
{
$sql="INSERT INTO `user`(`first_name`, `last_name`, `Email`, `password`, `mobile`, `address`) VALUES('$f_name','$l_name','$email','$password','$mobile','$address1')";

mysqli_query($conn,$sql);
	echo"<script>alert('data saved')</script>";
	echo"<script>window.open('customer_registration.php','_self')</script>";
	}
				else{
					
					 echo "<script>alert('Sorry, your Not registered yet please try again!!!')</script>";				
					 echo "<script>window.open('customer_registration.php','_self')</script>";
				}

	
	}

 ?>