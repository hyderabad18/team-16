<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration For YFS</title>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="login_registration_validation.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
	<div class="input-group">
      <label>Phone Number</label>
      <input type="Number" name="phno">
    </div>
	<div class="input-group">
      <label>Pin Code</label>
      <input type="Number" name="pin">
    </div>
	<div class="input-group">
      <label>Preffered Time</label>
      <input type="checkbox" name="week" value="Weekdays"> WeekDays<br>
  <input type="checkbox" name="week" value="weekends" checked="checked"> WeekEnds<br>
    </div>
	
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>