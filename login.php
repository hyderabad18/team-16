<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Registration page</title>
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body>
<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
 <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">USER LOGIN</h2><br><br>
           <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
          </div>
        </div>
		<div class ="row">
		<div class="col-sm-2">
				</div>
				
									<div style='text-align:right;' class="col-sm-3">
										<label for="address"><b>User Name<span class="text-danger">*</span> : </b></label>
									</div>
									<div class="col-sm-3">
										<input class="form-control" id="username" name="username" type="text">
									</div>
		
		  
				</div><br>
				
				<div class ="row">
		<div class="col-sm-2">
				</div>
				
									<div style='text-align:right;' class="col-sm-3">
										<label for="address"><b>Password<span class="text-danger">*</span> : </b></label>
									</div>
									<div class="col-sm-3">
										<input class="form-control" id="password" name="password" type="password">
									</div>
		
		  
				</div><br>
				<center>
								<button type="submit" class="btn btn-primary" id="save" name="login_user">SIGN IN</button>&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="reset" class="btn btn-info" id="reset" name="reset">RESET</button>
							</center><br>
				<div class="row">
<div class="col-sm-5">
				</div>
<div class="col-sm-3"><label for="address">Not Registered ?</label>
				</div>				
							
		</div>
		<div class="row">
<div class="col-sm-5">
				</div>
				<button type="button" class="btn btn-success"><a href="register.php">Create an Account</a></button>

				</div>				
							
		</div>
  <!--<div class="header">-
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>-->
  </form>
</body>
</html>

 