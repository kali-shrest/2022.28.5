<?php
require "db.php";
$username=mysqli_real_escape_string($conn,$_GET['username']);
$checkuser="SELECT * from users where username='$username'";
$result=mysqli_query($conn,$checkuser);
if(mysqli_num_rows($result)>0)
{
echo "<span class='text-danger'>Username already exists</span>";
}
else
{
echo "<span class='text-success'>Username is available</span>";
}
?>