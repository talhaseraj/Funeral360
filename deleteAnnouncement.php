<?php
include('database.php');
		$id = $_GET['del'];
mysqli_query($conn, "DELETE FROM announcedfunerals WHERE sr=$id");
	$_SESSION['message'] = "Announcement deleted!"; 
	header('location: AdminPage.php');

?>