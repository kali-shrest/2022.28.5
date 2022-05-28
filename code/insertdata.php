<?php
require "db.php";
$FirstName=mysqli_real_escape_string($conn,$_GET['firstname']);
$LastName=mysqli_real_escape_string($conn,$_GET['lastname']);
$username=mysqli_real_escape_string($conn,$_GET['username']);
$password=mysqli_real_escape_string($conn,$_GET['password']);
$email=mysqli_real_escape_string($conn,$_GET['email']);
$salt="yughkjhbgvbhj";
// $query= "INSERT INTO `users`(`username`, `first_name`, `last_name`, `email`, `password`) VALUES ('[$username]','[$first_name]','[last_name]','[$email]','[$password]";
$query = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `email`, `password`) VALUES ('$username','$FirstName','$LastName','$email','$password')";
// $query= "INSERT INTO users(username,first_name,last_name,email,password) VALUES('$username','$FirstName','$LastName','$email','$password1')";
$results=mysqli_query($conn, $query);
echo "Registered successfully";
?>