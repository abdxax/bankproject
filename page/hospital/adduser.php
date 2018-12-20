<?php
session_start();
require "../connect/DB.php";
$em=$_SESSION['email'];
//echo $em;
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$phone=$_POST['phone'];
	$emails=$_POST['email'];
	//$pass=$_POST['pass'];
	

	$db=new DB();
	$db->addnewUser($name,$phone,$emails,$em,$pass);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

    <meta name="viewpower" content="width=device-width, initial-scale=1"><!-- thisi is very importent for responsive website -->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body class="users-body">
<!-- Header -->
    
<header>
   	

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hello Mr. ....</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="#">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<!-- section for part -->
<section>
	<div class="container">
		<div class="row">
			<!-- Add new usser -->
			<div class="col-md-6">
				<form method="POST">
                   <h2> Create New User</h2>
                    <br>
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>

					<div class="form-group">
						<input type="text" name="" class="form-control" placeholder="ID">
					</div>

					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>

					<div class="form-group">
						<input type="text" name="phone" class="form-control" placeholder="Mobile">
					</div>

					<div class="form-group">
						<input type="password" name="pass" class="form-control" placeholder="password">
					</div>

				
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-info" value="Create">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!--footer -->
<footer>
	
</footer>


<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>