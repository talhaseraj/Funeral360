<?php

include("database.php");
    $name=$_POST['name'];
    $user=$_SESSION["sr"];
    $fathername=$_POST['fathername'];
    $age=$_POST['age'];
    $cod=$_POST['cod'];
    $dat=$_POST['dat'];
    $fpc=$_POST['fpc'];
    $address=$_POST['address'];
    $lat=$_POST['lat'];
    $lng=$_POST['lng'];
    $query="insert into funerals ( name, fathername, age, cod, dat, fpc,address,lat,lng,user,status) VALUES ('$name','$fathername','$age','$cod','$dat','$fpc','$address','$lat','$lng','$user','P')";
    $run=mysqli_query($conn,$query);
	$_SESSION['message'] = "JOM Added Successfully It will be visible on map Soon !"; 
    header('location:index.php');
    

?>

