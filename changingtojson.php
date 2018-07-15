<?php
include('connection.php');
$sql="SELECT * from youthforseregistration";
$result=mysqli_query($db,$sql);
echo $result;
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
?>
