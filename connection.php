<?php
session_start();

// initializing variables
//$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'youthforseva');
if($db)
	echo "connected";
// REGISTER USER
if (isset($_POST[''])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['Emailid']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['Phonenumber']);
  $ptime = mysqli_real_escape_string($db, $_POST['	Preferredtime']);
  $pincode = mysqli_real_escape_string($db, $_POST['Pincode']);
	
}
?>