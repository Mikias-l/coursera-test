<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="assets/images/online-shopping-logo-01-01-.jpg" rel="icon">
	<title>Etho_UsedItem</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/FlexSlider.css">
</head>     
<body>
	

	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><a href="index.php" class="navbar-brand">Etho_UsedItem</a>
			</div>

			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				  <div class="dropdown-menu" style="width: 400px;">
					  <div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
<li><a href="login1.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a>
					<ul class="dropdown-menu">
					<div style="width: 300px;">
						<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email">
								<label for="email">Password</label>
								<input type="password" class="form-control" id="password">
								<p><br></p>
								<a href="#" style="color: white;list-style-type: none;">Forgot Password?</a>
								<input type="submit" class="btn btn-success" style="float: right;bottom:12px;" id="login" value="Login" name="">
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
				</ul>
				
				
			  <li><a href="customer_registration.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
		<br><br><br>
        <div class="mainmenu-area">
        <div class="navbar-collapse">
        <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Gallary</a></li>
        <li><a href="#">Contactus</a></li>
        </ul>
        </div>
        </div>
	<!-- Slider Begins -->
<div class="slider-area">
<div class="one-time">
	    <div><img src="assets/images/car1.jpg"></div>
	    <div><img src="assets/images/car2.jpg"></div>
	    <div><img src="assets/images/car3.jpg"></div>
  	</div>
</div>
    <!-- Slider ends -->

	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>-->
				<div id="get_brand"></div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brands</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>-->
			</div>
			<div class="col-md-8">
			<div class="row">
					<div class="col-md-12" id="cartmsg">
						
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--Featured Products--
						<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body"><img src="assets/prod_images/samsung_galaxy.jpg"></div>
								<div class="panel-heading">$500.00
								<button class="btn btn-danger btn-xs" style="float:right;">Add to Cart</button>
								</div>
							</div>
						</div>-->
					</div>
					<div class="panel-footer">&copy; 2017</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>
						
					</ul>
				</center>
			</div>

			<!-- Modal -->
				
				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        
				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-3.3.6-dist/js/jquery-migrate-1.2.1.min.js" ></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
    <script src="assets/bootstrap-3.3.6-dist/bxslider.min.js" type="text/javascript"></script>
    
</body>
</html>