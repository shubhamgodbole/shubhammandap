<?php
		include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->
	 
	 <!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
</head>
<body class="">
	<div class="">
		<!-- main content start-->
		<div id="page-wrapper">
			<div class=" login-page">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form  method="post">
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							<!-- <div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div> -->
							<input type="submit" name="submit" value="Sign In">
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>
						</form>
						<?php
							if(isset($_REQUEST['submit']))
							{
								$un=$_POST['email'];
								$p=$_POST['password'];
								
								$qry="select * from user where email='$un' and password='$p'";
								$result = $con->query($qry);
								if($result->num_rows > 0)
								{
									
									while($d=$result->fetch_array()) {	
										session_start();
										$_SESSION["user_id"]=$d['id'];		 
										$_SESSION["email"]=$d['email'];
										$_SESSION["fname"]=$d['fname'];
										$_SESSION["lname"]=$d['lname'];
										 header("location:gallery.php");
									}
									//echo "<h1>seeeion has been started...</h1>";
								}
								else
								{
									echo "<center><h1>Invalid username or password</h1></center>";	
								}
							}
						?>
					</div>
				</div>

			</div>
		</div>
		
	</div>
	<div><?php //include('footer_files.php') ?></div>
</body>
</html>
