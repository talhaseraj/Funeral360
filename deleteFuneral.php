<?php
include('database.php');
		$id = $_GET['del'];
mysqli_query($conn, "DELETE FROM funerals WHERE sr=$id");
	$_SESSION['message'] = "Activity deleted!"; 
	header('location: AdminPage.php');

?>