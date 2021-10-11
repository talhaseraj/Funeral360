<?php
    include("database.php");
    $sr=$_SESSION["sr"];

    $password=$_POST['password'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $cnic=$_POST['cnic'];

    $query="UPDATE users SET name='$name',fathername='$fathername',password='$password',email='$email',phone='$phone',cnic='$cnic' where sr=$sr;";    $run=mysqli_query($conn,$query); 
$_SESSION['message'] = "Profile Updated Successfully !"; 
	header('location: profile.php');
?>
