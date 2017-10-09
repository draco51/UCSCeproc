<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup - UCSC e-Procurement System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
			<img src="img/logo.png" height="40px" width="40px"> 
				UCSC e-Procurement System			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="login.php" class="">
							Already have an account? Login now
						</a>
						
					</li>
					<li class="">						
						<a href="index.php" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		<!-- Connect database to this form -->
		<form action="" method="post">
		
			<h1>Please sign up here</h1>			
			
			<div class="login-fields">
				
				<p>You will be approved by admin</p>
				
				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" value="" placeholder="First Name" class="login" required="required"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input type="text" id="lastname" name="lastname" value="" placeholder="Last Name" class="login" required="required"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Username:</label>	
					<input type="text" id="lastname" name="username" value="" placeholder="Username" class="login" required="required" />
				</div> <!-- /field -->


				
				<div class="field">
					<label  >User Group:</label>
					<select id="bookcategory" name="bookcategory" required="required">
	      				<option value="novel">Head of Department Clerk</option>
	      				<option value="shortstory">Head of Department</option>
					    <option value="magazine">Procurement Clerk</option>
					    <option value="magazine">Technical Evaluation Comittee</option>
				    </select>
				</div> <!-- /field -->


				<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="login"/>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<input type="submit" class="button btn btn-primary btn-large" value=" Register " name="submit">
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="login.php">Login to your account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>



<?php
include('database/config.php');

if(isset($_POST["submit"])){

	$username = $_POST['username'];
	$password = $_POST["password"];
	$password_2 = $_POST["confirm_password"];

	if($password==$password_2){
		// Create connection
		//$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO user(username,password)
		VALUES ('$username','$password')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<script type= 'text/javascript'>alert('You were registered successfully');</script>";
		  	header("location:login.php");

		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		}

	}else{
		echo "<script type= 'text/javascript'>alert('Your Password does not match!');</script>";

	}



$conn->close();
}




?>