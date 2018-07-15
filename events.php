<?php 
include('connection.php');
header("Access-Control-Allow-Origin: *");
echo $_GET['q'];  
// 
if (isset($_POST[''])) {
  // receive all input values from the form
  $ename = mysqli_real_escape_string($db, $_POST['EName']);
  $eid = mysqli_real_escape_string($db, $_POST['Eid']);
  $edesc= mysqli_real_escape_string($db, $_POST['Edescription']);
  $epincode = mysqli_real_escape_string($db, $_POST['Epincode']);
  $totalcheckins=mysqli_real_escape_string($db, $_POST['Totalcheckins']);
  
  
//inserting in to datbase
  	$query = "INSERT INTO events
  			  VALUES('$EName', '$Eid', '$Edescription','$Epincode')";
	mysqli_query($db,$query);
//selecting from database
*/
$query1="select * from events";
$result=mysqli_query($db,$query1);
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);



?>
