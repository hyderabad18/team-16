<?php 
include('connection.php')


if (isset($_POST[''])) {
  // receive all input values from the form
  $vid = mysqli_real_escape_string($db, $_POST['Vid']);
  $checkin = mysqli_real_escape_string($db, $_POST['Checkin']);
  $checkout = mysqli_real_escape_string($db, $_POST['Checkout']);
  $eid= mysqli_real_escape_string($db, $_POST['Eid']);
  $eventcompleted= mysqli_real_escape_string($db, $_POST['Eventcompleted']);
  $status= mysqli_real_escape_string($db, $_POST['status']);
  $tid= mysqli_real_escape_string($db, $_POST['tid']);
  ?>