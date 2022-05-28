<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "grocery1";

$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn){
    ?>
    <script>
        // alert('connection is successful');
    </script>
    <?php

}else{
    die("Not connection" . mysqli_connect_error());
}
?>