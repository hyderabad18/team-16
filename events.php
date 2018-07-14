<?php 
include('connection.php')

// 
if (isset($_POST[''])) {
  // receive all input values from the form
  $ename = mysqli_real_escape_string($db, $_POST['EName']);
  $eid = mysqli_real_escape_string($db, $_POST['Eid']);
  $edesc= mysqli_real_escape_string($db, $_POST['Edescription']);
  $epincode = mysqli_real_escape_string($db, $_POST['Epincode']);

?>
