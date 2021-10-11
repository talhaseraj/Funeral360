<?php
    include("database.php");
    $sr=$_POST['id'];
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $age=$_POST['age'];
    $cod=$_POST['cod'];
    $dat=$_POST['dat'];
    $fpc=$_POST['fpc'];
    $address=$_POST['address'];
    $lat=$_POST['lat'];
    $lng=$_POST['lng'];

    $query="UPDATE funerals SET name='$name',fathername='$fathername',age='$age',cod='$cod',dat='$dat',fpc='$fpc',address='$address',lat='$lat',lng='$lng' where sr=$sr;";    $run=mysqli_query($conn,$query);   
    echo $sr;
	$_SESSION['message'] = "Activity Updated !"; 

header("location:myActivities.php");
?>
