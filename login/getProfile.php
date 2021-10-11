<?php

$username=$_SESSION["user"];
$q="SELECT * FROM users WHERE username = '$username'";
$results = mysqli_query($conn,$q);
$data = mysqli_fetch_array($results);




//echo $results;
?>