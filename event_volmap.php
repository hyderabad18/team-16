<?php 
include('connection.php')
$conn=mysqli_select_db($db,'event_vol_map');
$confirm="CONFIRM";
$queue="QUEUE";
$rejected="REJECTED";
if (isset($_POST[''])) {
  // receive all input values from the form
  $vid = mysqli_real_escape_string($db, $_POST['Vid']);
  $checkin = mysqli_real_escape_string($db, $_POST['Checkin']);
  $checkout = mysqli_real_escape_string($db, $_POST['Checkout']);
  $eid= mysqli_real_escape_string($db, $_POST['Eid']);
  $eventcompleted= mysqli_real_escape_string($db, $_POST['Eventcompleted']);
  $status= mysqli_real_escape_string($db, $_POST['status']);
  $tid= mysqli_real_escape_string($db, $_POST['tid']);
  mysqli_query($db,$query);
  //inserting in to datbase
  	$query = "INSERT INTO event_vol_map
  			  VALUES('$	EName', '$ Eid', '$Edescription ','$Epincode')";
	mysqli_query($db,$query);
//selecting from database
$query1="select * from event_vol_map ";
mysqli_query($db,$query1);
  ?>
  
  