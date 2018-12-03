<?php
session_start();
require "connect/DB.php";

if (isset($_POST['subm'])) {
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	

	$db=new DB();
	$db->login($email,$pass);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

    <meta name="viewpower" content="width=device-width, initial-scale=1"><!-- thisi is very importent for responsive website -->
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="login-body">
<!-- Header -->
<div class="col-md-12">
	<div class="col-md-6">
		<div class="text-center msgs">
			<h3>SAVE A LIFE GIVE BLOOD</h3>
		</div>
	</div>
	<div class="col-md-6">
		<div class="logo">
	<img src="logo.png" width="200" height="200">
</div>
	</div>
</div>
<div class="login">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default panl">
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder=" Email">
					</div>
					<div class="form-group">
						<input type="password" name="pass" placeholder="Password" class="form-control" >
					</div>
					<div class="form-group">
						
						<input type="submit" name="subm" class="btn btn-info" value="Login ">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>

</body>
</html>