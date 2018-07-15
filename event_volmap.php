<?php 
include('connection.php')
echo $_GET['q','id'];  

if (isset($_POST[''])) {
  // receive all input values from the form
  $vid = mysqli_real_escape_string($db, $_POST['Phonenumber']);
  $eid= mysqli_real_escape_string($db, $_POST['Eid']);
  $tid= mysqli_real_escape_string($db, $_POST['Tid']);
  mysqli_query($db,$query);
  //inserting in to datbase
  	$query = "INSERT INTO event_vol_map
  			  VALUES('$	EName', '$ Eid', '$Edescription ','$Epincode')";
	mysqli_query($db,$query);
//selecting from database
$query1="select * from event_vol_map ";
$result=mysqli_query($db,$query1);
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
  ?>
  
  