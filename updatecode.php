<?php 
$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password1']);
  
  $ = mysqli_real_escape_string($db, $_POST['phno']);
  $pincode = mysqli_real_escape_string($db, $_POST['pin']);
  $time = mysqli_real_escape_string($db, $_POST['weekdays']);

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