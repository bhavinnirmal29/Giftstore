<?php

// Create connection
$conn = new mysqli('localhost','root', '', 'giftstore');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

$sql="INSERT INTO contactus (fname,lname,email,phone,message) VALUES('$fname','$lname','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
