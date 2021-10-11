<?php 
    $user=$_SESSION["sr"];



$results = mysqli_query($conn, "SELECT * FROM funerals where user = '$user'"); 



?>
