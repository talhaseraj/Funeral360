<?php
include('database.php');
		$id = $_GET['edit'];
mysqli_query($conn, "INSERT INTO announcedFunerals SELECT * FROM funerals
WHERE sr='$id';");
	

mysqli_query($conn, "UPDATE funerals SET status='A' WHERE sr='$id';");



$_SESSION['message'] = "Announced Successfullly !"; 
	header('location: AdminPage.php');

?>