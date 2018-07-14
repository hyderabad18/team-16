<?php include('server.php') 
 <form method="post" action="updation.php">
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
	
if (isset($_POST['update']) )
{
	$query1="select * from registration";
	$result=$conn->query($query1);
	 if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        { 
     
	$query="update registration set Name=$name,Emailid=$email,Password=$password,Preferredtime=$time,Pincode=$pincode where $row['Phonenumber']=Phonenumber";
	if(mysqli_query($db,$query))
		echo "database updated";
}	
?>