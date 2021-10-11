<?php
$conn=mysqli_connect('localhost','root','','funeral360');
    if($conn)
    {
    
    }
    
?>   

<?php
    session_start();

 $password=$_POST['password'];
   $username=$_POST['username'];

      $re="select * from admins where username= '$username' && password= '$password'";
               

    $run=mysqli_query($conn,$re);
$id=mysqli_fetch_array($run);
              $num=mysqli_num_rows($run);
if($num==1){

    $user=$_SESSION["user"] = $_POST['username'];
    $user=$_SESSION["sr"] = $id['sr'];

   header('location:../adminPage.php');
     
}
else
{ 
   	$_SESSION['message'] = "Invalid Credentials!"; 

  header('location:AdminloginPage.php');
}
?>