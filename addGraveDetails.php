<?php

include("database.php");
    $kinname=$_POST['kinname'];
    $sr=$_POST["sr"];
    $kincontact=$_POST["kincontact"];
    $graveyard=$_POST['graveyard'];
    $gravelat=$_POST['gravelat'];
    $gravelng=$_POST['gravelng'];
    $query="UPDATE funerals SET kinname='$kinname',kincontact='$kincontact',graveyard='$graveyard',gravelat='$gravelat',gravelng='$gravelng' where sr=$sr;";
    $run=mysqli_query($conn,$query);
	$_SESSION['message'] = "Successfully Added Grave Details !"; 
    header('location:myActivities.php');
    

?>

