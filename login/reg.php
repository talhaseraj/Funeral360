<?php

include("database.php");
    $password=$_POST['password'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $cnic=$_POST['cnic'];

      $re="select * from users where email= '$email' ";
    $run=mysqli_query($conn,$re);
              $num=mysqli_num_rows($run);
if($num==1){
        $_SESSION['message'] = "User Already Exists !"; 

    header('location:loginPage.php');
}
else
{
    $query="insert into users( username, name, fathername, cnic, phone, password, email) VALUES ('$username','$name','$fathername','$cnic','$phone','$password','$email')";
    $run=mysqli_query($conn,$query);
    $_SESSION['message'] = "Successfully Registered !"; 

  header('location:loginPage.php');
    
}
?>

