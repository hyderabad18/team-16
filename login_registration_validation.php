<?php 
include('connection.php');
$conn=mysqli_select_db($db,'registration');
//if($conn)
//	echo "selectd";
//REGISTER USER
if (isset($_POST[''])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['Emailid']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['Phonenumber']);
  $ptime = mysqli_real_escape_string($db, $_POST['	Preferredtime']);
  $pincode = mysqli_real_escape_string($db, $_POST['Pincode']);
//Login User

if (isset($_POST[''])) {
  $emailid= mysqli_real_escape_string($db, $_POST['Emailid']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  
}
//inserting in to datbase
  	$query = "INSERT INTO registration
  			  VALUES('$name ', '$email ', '$password ','$ptime','$pincode ')";
	mysqli_query($db,$query);
//selecting from database
$query1="select * from registration";
mysqli_query($db,$query1);




?>