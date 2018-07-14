<?php 
include('connection.php')
$conn=mysqli_select_db($db,'events');
// 
if (isset($_POST[''])) {
  // receive all input values from the form
  $ename = mysqli_real_escape_string($db, $_POST['EName']);
  $eid = mysqli_real_escape_string($db, $_POST['Eid']);
  $edesc= mysqli_real_escape_string($db, $_POST['Edescription']);
  $epincode = mysqli_real_escape_string($db, $_POST['Epincode']);
//inserting in to datbase
  	$query = "INSERT INTO events
  			  VALUES('$EName', '$Eid', '$Edescription','$Epincode ')";
	mysqli_query($db,$query);
//selecting from database
$query1="select * from events";
mysqli_query($db,$query1);

?>
